<?php

namespace App\Http\Controllers;

use App\Models\Movimientosdetalle;
use Illuminate\Http\Request;

/**
 * Class MovimientosdetalleController
 * @package App\Http\Controllers
 */
class MovimientosdetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientosdetalles = Movimientosdetalle::paginate();

        return view('movimientosdetalle.index', compact('movimientosdetalles'))
            ->with('i', (request()->input('page', 1) - 1) * $movimientosdetalles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movimientosdetalle = new Movimientosdetalle();
        return view('movimientosdetalle.create', compact('movimientosdetalle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Movimientosdetalle::$rules);

        $movimientosdetalle = Movimientosdetalle::create($request->all());

        return redirect()->route('movimientosdetalles.index')
            ->with('success', 'Movimientosdetalle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movimientosdetalle = Movimientosdetalle::find($id);

        return view('movimientosdetalle.show', compact('movimientosdetalle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movimientosdetalle = Movimientosdetalle::find($id);

        return view('movimientosdetalle.edit', compact('movimientosdetalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Movimientosdetalle $movimientosdetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimientosdetalle $movimientosdetalle)
    {
        request()->validate(Movimientosdetalle::$rules);

        $movimientosdetalle->update($request->all());

        return redirect()->route('movimientosdetalles.index')
            ->with('success', 'Movimientosdetalle updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $movimientosdetalle = Movimientosdetalle::find($id)->delete();

        return redirect()->route('movimientosdetalles.index')
            ->with('success', 'Movimientosdetalle deleted successfully');
    }
}
