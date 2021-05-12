<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Player;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('admin.players.playersIndex', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $roles = Role::all();
        $teams = Team::all();
        return view('admin.players.playersCreate', compact('genres', 'roles', 'teams'));
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
            "photo" => ["required", "mimes:jpg, jpeg, png", "max:5000"],
            "nom" => ["required"],
            "prenom" => ["required"],
            "age" => ["required", "numeric"],
            "phone" => ["required", "numeric"],
            "email" => ["required", "email"],
            "country" => ["required"],
            "genre_id" => ["required"],
            "role_id" => ["required"],
            "team_id" => ["required"],
        ]);

        $player = new Player();

        $request->file('photo')->storePublicly('img/', 'public');
        $player->photo = $request->file('photo')->hashName();
        
        $player->nom = $request->nom;
        $player->prenom = $request->prenom;
        $player->age = $request->age;
        $player->phone = $request->phone;
        $player->email = $request->email;
        $player->country = $request->country;
        $player->genre_id = $request->genre_id;
        $player->role_id = $request->role_id;
        $player->team_id = $request->team_id;
        
        $player->save();
        return redirect()->route('players.index')->with('success', $request->prenom . ' a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('admin.players.playersShow', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $genres = Genre::all();
        $roles = Role::all();
        $teams = Team::all();
        return view('admin.players.playersEdit', compact('player', 'genres', 'roles', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        request()->validate([
            "photo" => ["mimes:jpg, jpeg, png", "max:5000"],
            "nom" => ["required"],
            "prenom" => ["required"],
            "age" => ["required", "numeric"],
            "phone" => ["required", "numeric"],
            "email" => ["required", "email"],
            "country" => ["required"],
            "genre_id" => ["required"],
            "role_id" => ["required"],
            "team_id" => ["required"],
        ]);

        if ($request->file('photo') != null) {
            $request->file('photo')->storePublicly('img/', 'public');
            $player->photo = $request->file('photo')->hashName();
        }
        
        $player->nom = $request->nom;
        $player->prenom = $request->prenom;
        $player->age = $request->age;
        $player->phone = $request->phone;
        $player->email = $request->email;
        $player->country = $request->country;
        $player->genre_id = $request->genre_id;
        $player->role_id = $request->role_id;
        $player->team_id = $request->team_id;
        

        $player->save();
        return redirect()->route('players.index')->with('success', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index');
    }
}
