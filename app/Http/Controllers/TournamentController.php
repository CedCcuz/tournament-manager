<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentStoreRequest;
use App\Http\Requests\TournamentUpdateRequest;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        /*$tournaments = Tournament::latest()->paginate(5);

        return view('tournaments.index', compact('tournaments'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);*/

        $tournaments = Tournament::all();

        return view('tournaments.index', compact('tournaments')); // TODO: Test with tutorial approach
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('tournaments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TournamentStoreRequest $request): RedirectResponse
    {
        Tournament::create($request->validated());

        return redirect()->route('tournaments.index')->with('success', 'Tournament created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournament): View
    {
        return view('tournaments.show', compact('tournament'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tournament $tournament): View
    {
        return view('tournaments.edit', compact('tournament'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TournamentUpdateRequest $request, Tournament $tournament): RedirectResponse
    {
        $tournament->update($request->validated());

        return redirect()->route('tournaments.index')->with('success', 'Tournament updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $tournament): RedirectResponse
    {
        $tournament->delete();

        return redirect()->route('tournaments.index')->with('success', 'Tournament deleted successfully.');
    }
}
