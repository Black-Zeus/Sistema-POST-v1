<?php

namespace App\Http\Controllers;

use App\Models\Autorizacionescaja;
use Illuminate\Http\Request;

/**
 * Class AutorizacionescajaController
 * @package App\Http\Controllers
 */
class AutorizacionescajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autorizacionescajas = Autorizacionescaja::paginate();

        return view('autorizacionescaja.index', compact('autorizacionescajas'))
            ->with('i', (request()->input('page', 1) - 1) * $autorizacionescajas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autorizacionescaja = new Autorizacionescaja();
        return view('autorizacionescaja.create', compact('autorizacionescaja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Autorizacionescaja::$rules);

        $autorizacionescaja = Autorizacionescaja::create($request->all());

        return redirect()->route('autorizacionescajas.index')
            ->with('success', 'Autorizacionescaja created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autorizacionescaja = Autorizacionescaja::find($id);

        return view('autorizacionescaja.show', compact('autorizacionescaja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autorizacionescaja = Autorizacionescaja::find($id);

        return view('autorizacionescaja.edit', compact('autorizacionescaja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Autorizacionescaja $autorizacionescaja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autorizacionescaja $autorizacionescaja)
    {
        request()->validate(Autorizacionescaja::$rules);

        $autorizacionescaja->update($request->all());

        return redirect()->route('autorizacionescajas.index')
            ->with('success', 'Autorizacionescaja updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $autorizacionescaja = Autorizacionescaja::find($id)->delete();

        return redirect()->route('autorizacionescajas.index')
            ->with('success', 'Autorizacionescaja deleted successfully');
    }
}
