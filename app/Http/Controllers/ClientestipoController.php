<?php

namespace App\Http\Controllers;

use App\Models\Clientestipo;
use Illuminate\Http\Request;

/**
 * Class ClientestipoController
 * @package App\Http\Controllers
 */
class ClientestipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientestipos = Clientestipo::paginate();

        return view('clientestipo.index', compact('clientestipos'))
            ->with('i', (request()->input('page', 1) - 1) * $clientestipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientestipo = new Clientestipo();
        return view('clientestipo.create', compact('clientestipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Clientestipo::$rules);

        $clientestipo = Clientestipo::create($request->all());

        return redirect()->route('clientestipos.index')
            ->with('success', 'Clientestipo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientestipo = Clientestipo::find($id);

        return view('clientestipo.show', compact('clientestipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientestipo = Clientestipo::find($id);

        return view('clientestipo.edit', compact('clientestipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Clientestipo $clientestipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientestipo $clientestipo)
    {
        request()->validate(Clientestipo::$rules);

        $clientestipo->update($request->all());

        return redirect()->route('clientestipos.index')
            ->with('success', 'Clientestipo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $clientestipo = Clientestipo::find($id)->delete();

        return redirect()->route('clientestipos.index')
            ->with('success', 'Clientestipo deleted successfully');
    }
}
