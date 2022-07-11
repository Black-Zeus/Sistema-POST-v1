<?php

namespace App\Http\Controllers;

use App\Models\Tipolistaprecio;
use Illuminate\Http\Request;

/**
 * Class TipolistaprecioController
 * @package App\Http\Controllers
 */
class TipolistaprecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipolistaprecios = Tipolistaprecio::paginate();

        return view('tipolistaprecio.index', compact('tipolistaprecios'))
            ->with('i', (request()->input('page', 1) - 1) * $tipolistaprecios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipolistaprecio = new Tipolistaprecio();
        return view('tipolistaprecio.create', compact('tipolistaprecio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipolistaprecio::$rules);

        $tipolistaprecio = Tipolistaprecio::create($request->all());

        return redirect()->route('tipolistaprecios.index')
            ->with('success', 'Tipolistaprecio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipolistaprecio = Tipolistaprecio::find($id);

        return view('tipolistaprecio.show', compact('tipolistaprecio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipolistaprecio = Tipolistaprecio::find($id);

        return view('tipolistaprecio.edit', compact('tipolistaprecio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipolistaprecio $tipolistaprecio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipolistaprecio $tipolistaprecio)
    {
        request()->validate(Tipolistaprecio::$rules);

        $tipolistaprecio->update($request->all());

        return redirect()->route('tipolistaprecios.index')
            ->with('success', 'Tipolistaprecio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipolistaprecio = Tipolistaprecio::find($id)->delete();

        return redirect()->route('tipolistaprecios.index')
            ->with('success', 'Tipolistaprecio deleted successfully');
    }
}
