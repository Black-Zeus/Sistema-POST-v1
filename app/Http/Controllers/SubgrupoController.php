<?php

namespace App\Http\Controllers;

use App\Models\Subgrupo;
use Illuminate\Http\Request;

/**
 * Class SubgrupoController
 * @package App\Http\Controllers
 */
class SubgrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subgrupos = Subgrupo::paginate();

        return view('subgrupo.index', compact('subgrupos'))
            ->with('i', (request()->input('page', 1) - 1) * $subgrupos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subgrupo = new Subgrupo();
        return view('subgrupo.create', compact('subgrupo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Subgrupo::$rules);

        $subgrupo = Subgrupo::create($request->all());

        return redirect()->route('subgrupos.index')
            ->with('success', 'Subgrupo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subgrupo = Subgrupo::find($id);

        return view('subgrupo.show', compact('subgrupo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subgrupo = Subgrupo::find($id);

        return view('subgrupo.edit', compact('subgrupo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subgrupo $subgrupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subgrupo $subgrupo)
    {
        request()->validate(Subgrupo::$rules);

        $subgrupo->update($request->all());

        return redirect()->route('subgrupos.index')
            ->with('success', 'Subgrupo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subgrupo = Subgrupo::find($id)->delete();

        return redirect()->route('subgrupos.index')
            ->with('success', 'Subgrupo deleted successfully');
    }
}
