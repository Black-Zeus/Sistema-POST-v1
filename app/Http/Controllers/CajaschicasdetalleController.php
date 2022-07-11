<?php

namespace App\Http\Controllers;

use App\Models\Cajaschicasdetalle;
use Illuminate\Http\Request;

/**
 * Class CajaschicasdetalleController
 * @package App\Http\Controllers
 */
class CajaschicasdetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cajaschicasdetalles = Cajaschicasdetalle::paginate();

        return view('cajaschicasdetalle.index', compact('cajaschicasdetalles'))
            ->with('i', (request()->input('page', 1) - 1) * $cajaschicasdetalles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cajaschicasdetalle = new Cajaschicasdetalle();
        return view('cajaschicasdetalle.create', compact('cajaschicasdetalle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cajaschicasdetalle::$rules);

        $cajaschicasdetalle = Cajaschicasdetalle::create($request->all());

        return redirect()->route('cajaschicasdetalles.index')
            ->with('success', 'Cajaschicasdetalle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cajaschicasdetalle = Cajaschicasdetalle::find($id);

        return view('cajaschicasdetalle.show', compact('cajaschicasdetalle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cajaschicasdetalle = Cajaschicasdetalle::find($id);

        return view('cajaschicasdetalle.edit', compact('cajaschicasdetalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cajaschicasdetalle $cajaschicasdetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cajaschicasdetalle $cajaschicasdetalle)
    {
        request()->validate(Cajaschicasdetalle::$rules);

        $cajaschicasdetalle->update($request->all());

        return redirect()->route('cajaschicasdetalles.index')
            ->with('success', 'Cajaschicasdetalle updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cajaschicasdetalle = Cajaschicasdetalle::find($id)->delete();

        return redirect()->route('cajaschicasdetalles.index')
            ->with('success', 'Cajaschicasdetalle deleted successfully');
    }
}
