<?php

namespace App\Http\Controllers;

use App\Models\Migration;
use Illuminate\Http\Request;

/**
 * Class MigrationController
 * @package App\Http\Controllers
 */
class MigrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $migrations = Migration::paginate();

        return view('migration.index', compact('migrations'))
            ->with('i', (request()->input('page', 1) - 1) * $migrations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $migration = new Migration();
        return view('migration.create', compact('migration'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Migration::$rules);

        $migration = Migration::create($request->all());

        return redirect()->route('migrations.index')
            ->with('success', 'Migration created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $migration = Migration::find($id);

        return view('migration.show', compact('migration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $migration = Migration::find($id);

        return view('migration.edit', compact('migration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Migration $migration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Migration $migration)
    {
        request()->validate(Migration::$rules);

        $migration->update($request->all());

        return redirect()->route('migrations.index')
            ->with('success', 'Migration updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $migration = Migration::find($id)->delete();

        return redirect()->route('migrations.index')
            ->with('success', 'Migration deleted successfully');
    }
}
