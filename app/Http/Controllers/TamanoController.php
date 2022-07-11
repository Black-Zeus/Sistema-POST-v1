<?php

namespace App\Http\Controllers;

use App\Models\Tamano;
use Illuminate\Http\Request;

/**
 * Class TamanoController
 * @package App\Http\Controllers
 */
class TamanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamanos = Tamano::paginate();

        return view('tamano.index', compact('tamanos'))
            ->with('i', (request()->input('page', 1) - 1) * $tamanos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tamano = new Tamano();
        return view('tamano.create', compact('tamano'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tamano::$rules);

        $tamano = Tamano::create($request->all());

        return redirect()->route('tamanos.index')
            ->with('success', 'Tamano created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tamano = Tamano::find($id);

        return view('tamano.show', compact('tamano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tamano = Tamano::find($id);

        return view('tamano.edit', compact('tamano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tamano $tamano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tamano $tamano)
    {
        request()->validate(Tamano::$rules);

        $tamano->update($request->all());

        return redirect()->route('tamanos.index')
            ->with('success', 'Tamano updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tamano = Tamano::find($id)->delete();

        return redirect()->route('tamanos.index')
            ->with('success', 'Tamano deleted successfully');
    }
}
