@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>TEAMS</h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($teams as $team)           
            <div class="col-3 border pt-3">
                <h4 class="font-weight-bold">Club</h4>
                <h5>{{$team->nom}}</h3>
                <hr>
                <h4 class="font-weight-bold">City</h4>
                <p>{{$team->ville}}</p>
                <hr>
                <h4 class="font-weight-bold">Country</h4>
                <p>{{$team->pays}}</p>
                <hr>
                <h4 class="font-weight-bold">Continent</h4>
                <p>{{$team->continent}}</p>
            </div>
            @endforeach
        </div>

    </div>
    <div class="text-center mt-4">
        <a href={{route('home')}} class="btn btn-dark mx-2">HOME</a>
        <a href={{route('players')}} class="btn btn-success mx-2">PLAYERS</a>
    </div>

@endsection