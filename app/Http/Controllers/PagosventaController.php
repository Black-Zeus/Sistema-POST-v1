<?php

namespace App\Http\Controllers;

use App\Models\Pagosventa;
use Illuminate\Http\Request;

/**
 * Class PagosventaController
 * @package App\Http\Controllers
 */
class PagosventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagosventas = Pagosventa::paginate();

        return view('pagosventa.index', compact('pagosventas'))
            ->with('i', (request()->input('page', 1) - 1) * $pagosventas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagosventa = new Pagosventa();
        return view('pagosventa.create', compact('pagosventa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pagosventa::$rules);

        $pagosventa = Pagosventa::create($request->all());

        return redirect()->route('pagosventas.index')
            ->with('success', 'Pagosventa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagosventa = Pagosventa::find($id);

        return view('pagosventa.show', compact('pagosventa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagosventa = Pagosventa::find($id);

        return view('pagosventa.edit', compact('pagosventa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pagosventa $pagosventa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagosventa $pagosventa)
    {
        request()->validate(Pagosventa::$rules);

        $pagosventa->update($request->all());

        return redirect()->route('pagosventas.index')
            ->with('success', 'Pagosventa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pagosventa = Pagosventa::find($id)->delete();

        return redirect()->route('pagosventas.index')
            ->with('success', 'Pagosventa deleted successfully');
    }
}
