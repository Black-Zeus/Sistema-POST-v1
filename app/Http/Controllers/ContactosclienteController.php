<?php

namespace App\Http\Controllers;

use App\Models\Contactoscliente;
use Illuminate\Http\Request;

/**
 * Class ContactosclienteController
 * @package App\Http\Controllers
 */
class ContactosclienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactosclientes = Contactoscliente::paginate();

        return view('contactoscliente.index', compact('contactosclientes'))
            ->with('i', (request()->input('page', 1) - 1) * $contactosclientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contactoscliente = new Contactoscliente();
        return view('contactoscliente.create', compact('contactoscliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Contactoscliente::$rules);

        $contactoscliente = Contactoscliente::create($request->all());

        return redirect()->route('contactosclientes.index')
            ->with('success', 'Contactoscliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactoscliente = Contactoscliente::find($id);

        return view('contactoscliente.show', compact('contactoscliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactoscliente = Contactoscliente::find($id);

        return view('contactoscliente.edit', compact('contactoscliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contactoscliente $contactoscliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactoscliente $contactoscliente)
    {
        request()->validate(Contactoscliente::$rules);

        $contactoscliente->update($request->all());

        return redirect()->route('contactosclientes.index')
            ->with('success', 'Contactoscliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contactoscliente = Contactoscliente::find($id)->delete();

        return redirect()->route('contactosclientes.index')
            ->with('success', 'Contactoscliente deleted successfully');
    }
}
