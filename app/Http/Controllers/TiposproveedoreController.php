<?php

namespace App\Http\Controllers;

use App\Models\Tiposproveedore;
use Illuminate\Http\Request;

/**
 * Class TiposproveedoreController
 * @package App\Http\Controllers
 */
class TiposproveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposproveedores = Tiposproveedore::paginate();

        return view('tiposproveedore.index', compact('tiposproveedores'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposproveedores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposproveedore = new Tiposproveedore();
        return view('tiposproveedore.create', compact('tiposproveedore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tiposproveedore::$rules);

        $tiposproveedore = Tiposproveedore::create($request->all());

        return redirect()->route('tiposproveedores.index')
            ->with('success', 'Tiposproveedore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposproveedore = Tiposproveedore::find($id);

        return view('tiposproveedore.show', compact('tiposproveedore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposproveedore = Tiposproveedore::find($id);

        return view('tiposproveedore.edit', compact('tiposproveedore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tiposproveedore $tiposproveedore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiposproveedore $tiposproveedore)
    {
        request()->validate(Tiposproveedore::$rules);

        $tiposproveedore->update($request->all());

        return redirect()->route('tiposproveedores.index')
            ->with('success', 'Tiposproveedore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposproveedore = Tiposproveedore::find($id)->delete();

        return redirect()->route('tiposproveedores.index')
            ->with('success', 'Tiposproveedore deleted successfully');
    }
}
