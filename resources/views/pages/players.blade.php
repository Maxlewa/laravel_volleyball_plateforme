@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>PLAYERS</h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($players as $player)           
            <div class="col-3 border pt-3">
                <h4 class="font-weight-bold text-primary">Player name</h4>
                <h3>{{$player->prenom}} {{$player->nom}}</h3>
                <hr>
                <h4 class="font-weight-bold text-primary">Team</h4>
                <p>{{$player->team->nom}}</p>
                <hr>
                <h4 class="font-weight-bold text-primary">Role</h4>
                <p>{{$player->role->nom}}</p>
                <hr>
                <h4 class="font-weight-bold text-primary">Age</h4>
                <p>{{$player->age}} ans</p>
                <hr>
                <h4 class="font-weight-bold text-primary">Telephone</h4>
                <p>+32 {{$player->phone}}</p>
                <hr>
                <h4 class="font-weight-bold text-primary">E-mail</h4>
                <p>{{$player->email}}</p>
                <hr>
                <h4 class="font-weight-bold text-primary">Country</h4>
                <p>{{$player->country}}</p>
                <hr>
                <h4 class="font-weight-bold text-primary">Genre</h4>
                <p>{{$player->genre->nom}}</p>
            </div>
            @endforeach
        </div>

    </div>
    <div class="text-center mt-4 mb-4">
        <a href={{route('home')}} class="btn btn-dark mx-2">HOME</a>
        <a href={{route('teams')}} class="btn btn-primary mx-2">TEAMS</a>
    </div>
    
@endsection