<?php

namespace App\Http\Controllers;

use App\Models\Tipocajaschica;
use Illuminate\Http\Request;

/**
 * Class TipocajaschicaController
 * @package App\Http\Controllers
 */
class TipocajaschicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipocajaschicas = Tipocajaschica::paginate();

        return view('tipocajaschica.index', compact('tipocajaschicas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipocajaschicas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipocajaschica = new Tipocajaschica();
        return view('tipocajaschica.create', compact('tipocajaschica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipocajaschica::$rules);

        $tipocajaschica = Tipocajaschica::create($request->all());

        return redirect()->route('tipocajaschicas.index')
            ->with('success', 'Tipocajaschica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipocajaschica = Tipocajaschica::find($id);

        return view('tipocajaschica.show', compact('tipocajaschica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipocajaschica = Tipocajaschica::find($id);

        return view('tipocajaschica.edit', compact('tipocajaschica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipocajaschica $tipocajaschica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipocajaschica $tipocajaschica)
    {
        request()->validate(Tipocajaschica::$rules);

        $tipocajaschica->update($request->all());

        return redirect()->route('tipocajaschicas.index')
            ->with('success', 'Tipocajaschica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipocajaschica = Tipocajaschica::find($id)->delete();

        return redirect()->route('tipocajaschicas.index')
            ->with('success', 'Tipocajaschica deleted successfully');
    }
}
