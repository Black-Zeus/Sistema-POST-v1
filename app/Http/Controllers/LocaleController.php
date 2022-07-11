<?php

namespace App\Http\Controllers;

use App\Models\Locale;
use Illuminate\Http\Request;

/**
 * Class LocaleController
 * @package App\Http\Controllers
 */
class LocaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locales = Locale::paginate();

        return view('locale.index', compact('locales'))
            ->with('i', (request()->input('page', 1) - 1) * $locales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locale = new Locale();
        return view('locale.create', compact('locale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Locale::$rules);

        $locale = Locale::create($request->all());

        return redirect()->route('locales.index')
            ->with('success', 'Locale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $locale = Locale::find($id);

        return view('locale.show', compact('locale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $locale = Locale::find($id);

        return view('locale.edit', compact('locale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Locale $locale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locale $locale)
    {
        request()->validate(Locale::$rules);

        $locale->update($request->all());

        return redirect()->route('locales.index')
            ->with('success', 'Locale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $locale = Locale::find($id)->delete();

        return redirect()->route('locales.index')
            ->with('success', 'Locale deleted successfully');
    }
}
