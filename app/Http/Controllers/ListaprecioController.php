<?php

namespace App\Http\Controllers;

use App\Models\Listaprecio;
use Illuminate\Http\Request;

/**
 * Class ListaprecioController
 * @package App\Http\Controllers
 */
class ListaprecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaprecios = Listaprecio::paginate();

        return view('listaprecio.index', compact('listaprecios'))
            ->with('i', (request()->input('page', 1) - 1) * $listaprecios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listaprecio = new Listaprecio();
        return view('listaprecio.create', compact('listaprecio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Listaprecio::$rules);

        $listaprecio = Listaprecio::create($request->all());

        return redirect()->route('listaprecios.index')
            ->with('success', 'Listaprecio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listaprecio = Listaprecio::find($id);

        return view('listaprecio.show', compact('listaprecio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listaprecio = Listaprecio::find($id);

        return view('listaprecio.edit', compact('listaprecio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Listaprecio $listaprecio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listaprecio $listaprecio)
    {
        request()->validate(Listaprecio::$rules);

        $listaprecio->update($request->all());

        return redirect()->route('listaprecios.index')
            ->with('success', 'Listaprecio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $listaprecio = Listaprecio::find($id)->delete();

        return redirect()->route('listaprecios.index')
            ->with('success', 'Listaprecio deleted successfully');
    }
}
