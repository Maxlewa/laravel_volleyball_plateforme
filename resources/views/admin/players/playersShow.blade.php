@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>PLAYER - INFO</h1>
        <hr>
        <div class="container text-center pt-4 w-50">
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
            <hr>
            <h4 class="font-weight-bold">Photo</h4>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{route('players.edit', $player->id)}}"><button class="btn btn-primary">Edit</button></a>
            <form method="post" action="{{route('players.destroy', $player->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mx-1" type="submit">Delete</button>
            </form>
            <a href="{{route('adminHome')}}"><button class="btn btn-dark">Retour</button></a>
        </div>
    </div>
@endsection