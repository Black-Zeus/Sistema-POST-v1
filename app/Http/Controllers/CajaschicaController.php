<?php

namespace App\Http\Controllers;

use App\Models\Cajaschica;
use Illuminate\Http\Request;

/**
 * Class CajaschicaController
 * @package App\Http\Controllers
 */
class CajaschicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cajaschicas = Cajaschica::paginate();

        return view('cajaschica.index', compact('cajaschicas'))
            ->with('i', (request()->input('page', 1) - 1) * $cajaschicas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cajaschica = new Cajaschica();
        return view('cajaschica.create', compact('cajaschica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cajaschica::$rules);

        $cajaschica = Cajaschica::create($request->all());

        return redirect()->route('cajaschicas.index')
            ->with('success', 'Cajaschica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cajaschica = Cajaschica::find($id);

        return view('cajaschica.show', compact('cajaschica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cajaschica = Cajaschica::find($id);

        return view('cajaschica.edit', compact('cajaschica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cajaschica $cajaschica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cajaschica $cajaschica)
    {
        request()->validate(Cajaschica::$rules);

        $cajaschica->update($request->all());

        return redirect()->route('cajaschicas.index')
            ->with('success', 'Cajaschica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cajaschica = Cajaschica::find($id)->delete();

        return redirect()->route('cajaschicas.index')
            ->with('success', 'Cajaschica deleted successfully');
    }
}
