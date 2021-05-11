@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>ADMIN</h1>
        <hr>
    </div>
    <div class="text-center mt-4">
        <a href={{route('teams.index')}} class="btn btn-primary mx-2">TEAMS</a>
        <a href={{route('players.index')}} class="btn btn-success mx-2">PLAYERS</a>
    </div>
@endsection