<?php

namespace App\Http\Controllers;

use App\Models\Subproducto;
use Illuminate\Http\Request;

/**
 * Class SubproductoController
 * @package App\Http\Controllers
 */
class SubproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subproductos = Subproducto::paginate();

        return view('subproducto.index', compact('subproductos'))
            ->with('i', (request()->input('page', 1) - 1) * $subproductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subproducto = new Subproducto();
        return view('subproducto.create', compact('subproducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Subproducto::$rules);

        $subproducto = Subproducto::create($request->all());

        return redirect()->route('subproductos.index')
            ->with('success', 'Subproducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subproducto = Subproducto::find($id);

        return view('subproducto.show', compact('subproducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subproducto = Subproducto::find($id);

        return view('subproducto.edit', compact('subproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subproducto $subproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subproducto $subproducto)
    {
        request()->validate(Subproducto::$rules);

        $subproducto->update($request->all());

        return redirect()->route('subproductos.index')
            ->with('success', 'Subproducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subproducto = Subproducto::find($id)->delete();

        return redirect()->route('subproductos.index')
            ->with('success', 'Subproducto deleted successfully');
    }
}
