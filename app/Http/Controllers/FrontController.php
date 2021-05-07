<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        return view('home');
    }

    public function teams() {
        return view('pages.teams');
    }

    public function players() {
        return view('pages.players');
    }
}
