<?php

namespace App\Http\Controllers;

use App\Models\Metodospago;
use Illuminate\Http\Request;

/**
 * Class MetodospagoController
 * @package App\Http\Controllers
 */
class MetodospagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodospagos = Metodospago::paginate();

        return view('metodospago.index', compact('metodospagos'))
            ->with('i', (request()->input('page', 1) - 1) * $metodospagos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $metodospago = new Metodospago();
        return view('metodospago.create', compact('metodospago'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Metodospago::$rules);

        $metodospago = Metodospago::create($request->all());

        return redirect()->route('metodospagos.index')
            ->with('success', 'Metodospago created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $metodospago = Metodospago::find($id);

        return view('metodospago.show', compact('metodospago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metodospago = Metodospago::find($id);

        return view('metodospago.edit', compact('metodospago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Metodospago $metodospago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metodospago $metodospago)
    {
        request()->validate(Metodospago::$rules);

        $metodospago->update($request->all());

        return redirect()->route('metodospagos.index')
            ->with('success', 'Metodospago updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $metodospago = Metodospago::find($id)->delete();

        return redirect()->route('metodospagos.index')
            ->with('success', 'Metodospago deleted successfully');
    }
}
