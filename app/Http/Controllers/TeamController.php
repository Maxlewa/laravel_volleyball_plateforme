<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.teamsIndex', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('admin.teams.teamsCreate', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "nom" => ["required"],
            "ville" => ["required"],
            "pays" => ["required"],
            "continent" => ["required"],
            "max" => ["required", "numeric"],
        ]);
        
        $team = new Team();
        $team->nom = $request->nom;
        $team->ville = $request->ville;
        $team->pays = $request->pays;
        $team->continent = $request->continent;
        $team->max = $request->max;
        
        $team->save();
        return redirect()->route('teams.index')->with('success', $request->nom . ' a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('admin.teams.teamsShow', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.teams.teamsEdit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        request()->validate([
            "nom" => ["required"],
            "ville" => ["required"],
            "pays" => ["required"],
            "continent" => ["required"],
            "max" => ["required", "numeric"],
        ]);

        $team->nom = $request->nom;
        $team->ville = $request->ville;
        $team->pays = $request->pays;
        $team->continent = $request->continent;
        $team->max = $request->max;
        
        $team->save();
        return redirect()->route('teams.index')->with('success', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index');
    }
}
