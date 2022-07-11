<?php

namespace App\Http\Controllers;

use App\Models\Listapreciodetalle;
use Illuminate\Http\Request;

/**
 * Class ListapreciodetalleController
 * @package App\Http\Controllers
 */
class ListapreciodetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listapreciodetalles = Listapreciodetalle::paginate();

        return view('listapreciodetalle.index', compact('listapreciodetalles'))
            ->with('i', (request()->input('page', 1) - 1) * $listapreciodetalles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listapreciodetalle = new Listapreciodetalle();
        return view('listapreciodetalle.create', compact('listapreciodetalle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Listapreciodetalle::$rules);

        $listapreciodetalle = Listapreciodetalle::create($request->all());

        return redirect()->route('listapreciodetalles.index')
            ->with('success', 'Listapreciodetalle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listapreciodetalle = Listapreciodetalle::find($id);

        return view('listapreciodetalle.show', compact('listapreciodetalle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listapreciodetalle = Listapreciodetalle::find($id);

        return view('listapreciodetalle.edit', compact('listapreciodetalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Listapreciodetalle $listapreciodetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listapreciodetalle $listapreciodetalle)
    {
        request()->validate(Listapreciodetalle::$rules);

        $listapreciodetalle->update($request->all());

        return redirect()->route('listapreciodetalles.index')
            ->with('success', 'Listapreciodetalle updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $listapreciodetalle = Listapreciodetalle::find($id)->delete();

        return redirect()->route('listapreciodetalles.index')
            ->with('success', 'Listapreciodetalle deleted successfully');
    }
}
