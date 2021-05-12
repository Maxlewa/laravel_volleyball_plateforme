@extends('layouts.index')

@include('layouts.flash')

@section('content')
    <div class="text-center mt-4">
        <h1>TEAMS - ADMIN</h1>
        <hr>
    </div>
    <div class="container mb-4">
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
                <div class="text-center my-4">
                    <a href="{{route('teams.show', $team->id)}}" class="btn btn-warning">SHOW</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="text-center">
        <a href={{route('teams.create')}} class="btn btn-success">NEW TEAM</a>
    </div>
    <div class="text-center mt-4 mb-4">
        <a href={{route('home')}} class="btn btn-dark mx-2">HOME</a>
        <a href={{route('players.index')}} class="btn btn-primary mx-2">PLAYERS</a>
    </div>
@endsection