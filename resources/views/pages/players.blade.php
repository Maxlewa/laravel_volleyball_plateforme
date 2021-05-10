@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>PLAYERS</h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($players as $player)           
            <div class="col-3">
                <h3>{{$player->prenom}} {{$player->nom}}</h3>
                <p>{{$player->age}} ans</p>
                <p>+32 {{$player->phone}}</p>
                <p>{{$player->email}}</p>
                <p>{{$player->country}}</p>
            </div>
            @endforeach
        </div>

    </div>
    <div class="text-center mt-4">
        <a href={{route('home')}} class="btn btn-dark mx-2">HOME</a>
        <a href={{route('teams')}} class="btn btn-primary mx-2">TEAMS</a>
    </div>
    
@endsection