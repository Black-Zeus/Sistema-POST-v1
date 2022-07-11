<?php

namespace App\Http\Controllers;

use App\Models\Accionescajaschica;
use Illuminate\Http\Request;

/**
 * Class AccionescajaschicaController
 * @package App\Http\Controllers
 */
class AccionescajaschicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accionescajaschicas = Accionescajaschica::paginate();

        return view('accionescajaschica.index', compact('accionescajaschicas'))
            ->with('i', (request()->input('page', 1) - 1) * $accionescajaschicas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accionescajaschica = new Accionescajaschica();
        return view('accionescajaschica.create', compact('accionescajaschica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Accionescajaschica::$rules);

        $accionescajaschica = Accionescajaschica::create($request->all());

        return redirect()->route('accionescajaschicas.index')
            ->with('success', 'Accionescajaschica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accionescajaschica = Accionescajaschica::find($id);

        return view('accionescajaschica.show', compact('accionescajaschica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accionescajaschica = Accionescajaschica::find($id);

        return view('accionescajaschica.edit', compact('accionescajaschica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Accionescajaschica $accionescajaschica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accionescajaschica $accionescajaschica)
    {
        request()->validate(Accionescajaschica::$rules);

        $accionescajaschica->update($request->all());

        return redirect()->route('accionescajaschicas.index')
            ->with('success', 'Accionescajaschica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $accionescajaschica = Accionescajaschica::find($id)->delete();

        return redirect()->route('accionescajaschicas.index')
            ->with('success', 'Accionescajaschica deleted successfully');
    }
}
