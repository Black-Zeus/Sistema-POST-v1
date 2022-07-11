<?php

namespace App\Http\Controllers;

use App\Models\Tipomovimientoscaja;
use Illuminate\Http\Request;

/**
 * Class TipomovimientoscajaController
 * @package App\Http\Controllers
 */
class TipomovimientoscajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipomovimientoscajas = Tipomovimientoscaja::paginate();

        return view('tipomovimientoscaja.index', compact('tipomovimientoscajas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipomovimientoscajas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipomovimientoscaja = new Tipomovimientoscaja();
        return view('tipomovimientoscaja.create', compact('tipomovimientoscaja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipomovimientoscaja::$rules);

        $tipomovimientoscaja = Tipomovimientoscaja::create($request->all());

        return redirect()->route('tipomovimientoscajas.index')
            ->with('success', 'Tipomovimientoscaja created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipomovimientoscaja = Tipomovimientoscaja::find($id);

        return view('tipomovimientoscaja.show', compact('tipomovimientoscaja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipomovimientoscaja = Tipomovimientoscaja::find($id);

        return view('tipomovimientoscaja.edit', compact('tipomovimientoscaja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipomovimientoscaja $tipomovimientoscaja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipomovimientoscaja $tipomovimientoscaja)
    {
        request()->validate(Tipomovimientoscaja::$rules);

        $tipomovimientoscaja->update($request->all());

        return redirect()->route('tipomovimientoscajas.index')
            ->with('success', 'Tipomovimientoscaja updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipomovimientoscaja = Tipomovimientoscaja::find($id)->delete();

        return redirect()->route('tipomovimientoscajas.index')
            ->with('success', 'Tipomovimientoscaja deleted successfully');
    }
}
