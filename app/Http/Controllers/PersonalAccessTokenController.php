<?php

namespace App\Http\Controllers;

use App\Models\PersonalAccessToken;
use Illuminate\Http\Request;

/**
 * Class PersonalAccessTokenController
 * @package App\Http\Controllers
 */
class PersonalAccessTokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalAccessTokens = PersonalAccessToken::paginate();

        return view('personal-access-token.index', compact('personalAccessTokens'))
            ->with('i', (request()->input('page', 1) - 1) * $personalAccessTokens->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personalAccessToken = new PersonalAccessToken();
        return view('personal-access-token.create', compact('personalAccessToken'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PersonalAccessToken::$rules);

        $personalAccessToken = PersonalAccessToken::create($request->all());

        return redirect()->route('personal-access-tokens.index')
            ->with('success', 'PersonalAccessToken created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personalAccessToken = PersonalAccessToken::find($id);

        return view('personal-access-token.show', compact('personalAccessToken'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personalAccessToken = PersonalAccessToken::find($id);

        return view('personal-access-token.edit', compact('personalAccessToken'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PersonalAccessToken $personalAccessToken
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalAccessToken $personalAccessToken)
    {
        request()->validate(PersonalAccessToken::$rules);

        $personalAccessToken->update($request->all());

        return redirect()->route('personal-access-tokens.index')
            ->with('success', 'PersonalAccessToken updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personalAccessToken = PersonalAccessToken::find($id)->delete();

        return redirect()->route('personal-access-tokens.index')
            ->with('success', 'PersonalAccessToken deleted successfully');
    }
}
