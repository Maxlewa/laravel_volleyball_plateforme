@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>TEAMS</h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($teams as $team)           
            <div class="col-3">
                <h3>{{$team->nom}}</h3>
                <p>{{$team->ville}}</p>
                <p>{{$team->pays}}</p>
                <p>{{$team->continent}}</p>
            </div>
            @endforeach
        </div>

    </div>
    <div class="text-center mt-4">
        <a href={{route('home')}} class="btn btn-dark mx-2">HOME</a>
        <a href={{route('players')}} class="btn btn-success mx-2">PLAYERS</a>
    </div>
    <div class="text-center mt-4">
        <h2>LIST</h2>
        <div class="container text-left">
            <h4>Team name</h4>
            <hr>
            <h4>City</h4>
            <hr>
            <h4>Nb of players/maximum</h4>
            <hr>
        </div>
        <div class="text-center my-4">
            <a href="" class="btn btn-warning">SHOW</a>
        </div>
    </div>
@endsection