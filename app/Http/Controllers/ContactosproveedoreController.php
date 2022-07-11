<?php

namespace App\Http\Controllers;

use App\Models\Contactosproveedore;
use Illuminate\Http\Request;

/**
 * Class ContactosproveedoreController
 * @package App\Http\Controllers
 */
class ContactosproveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactosproveedores = Contactosproveedore::paginate();

        return view('contactosproveedore.index', compact('contactosproveedores'))
            ->with('i', (request()->input('page', 1) - 1) * $contactosproveedores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contactosproveedore = new Contactosproveedore();
        return view('contactosproveedore.create', compact('contactosproveedore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Contactosproveedore::$rules);

        $contactosproveedore = Contactosproveedore::create($request->all());

        return redirect()->route('contactosproveedores.index')
            ->with('success', 'Contactosproveedore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactosproveedore = Contactosproveedore::find($id);

        return view('contactosproveedore.show', compact('contactosproveedore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactosproveedore = Contactosproveedore::find($id);

        return view('contactosproveedore.edit', compact('contactosproveedore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contactosproveedore $contactosproveedore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactosproveedore $contactosproveedore)
    {
        request()->validate(Contactosproveedore::$rules);

        $contactosproveedore->update($request->all());

        return redirect()->route('contactosproveedores.index')
            ->with('success', 'Contactosproveedore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contactosproveedore = Contactosproveedore::find($id)->delete();

        return redirect()->route('contactosproveedores.index')
            ->with('success', 'Contactosproveedore deleted successfully');
    }
}
