@extends('layouts.index')

@include('layouts.flash')

@section('content')
    <div class="text-center mt-4">
        <h1>PLAYERS - ADMIN</h1>
        <hr>
    </div>
    <div class="container mb-4">
        <div class="row">
            @foreach ($players as $player)           
            <div class="col-3 border pt-4">
                <h4 class="font-weight-bold">Player name</h4>
                <h3>{{$player->prenom}} {{$player->nom}}</h3>
                <hr>
                <h4 class="font-weight-bold">Age</h4>
                <p>{{$player->age}} ans</p>
                <hr>
                <h4 class="font-weight-bold">Telephone</h4>
                <p>+32 {{$player->phone}}</p>
                <hr>
                <h4 class="font-weight-bold">E-mail</h4>
                <p>{{$player->email}}</p>
                <hr>
                <h4 class="font-weight-bold">Country</h4>
                <p>{{$player->country}}</p>
                <h4 class="font-weight-bold">Photo</h4>
                <img width="100%" src={{asset('img/' . $player->photo)}} alt="Player Photo">
                <div class="text-center my-4">
                    <a href="{{route('players.show', $player->id)}}" class="btn btn-warning">SHOW</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="text-center">
        <a href={{route('players.create')}} class="btn btn-success">NEW PLAYER</a>
    </div>
    <div class="text-center mt-4 mb-4">
        <a href={{route('home')}} class="btn btn-dark mx-2">HOME</a>
        <a href={{route('teams.index')}} class="btn btn-primary mx-2">TEAMS</a>
    </div>
    
@endsection