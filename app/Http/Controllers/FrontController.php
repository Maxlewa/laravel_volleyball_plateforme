<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        return view('home');
    }

    public function teams() {
        $teams = Team::all();
        return view('pages.teams', compact('teams'));
    }

    public function players() {
        $players = Player::all();
        return view('pages.players', compact('players'));
    }

    public function adminHome() {
        return view('admin.adminHome');
    }
}
