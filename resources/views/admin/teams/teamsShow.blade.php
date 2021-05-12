@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>TEAM - INFO</h1>
        <hr>
        <div class="container text-center pt-4 w-50">
            <h4 class="font-weight-bold">Club</h4>
            <h3>{{$team->nom}}</h3>
            <hr>
            <h4 class="font-weight-bold">Ville</h4>
            <p>{{$team->ville}}</p>
            <hr>
            <h4 class="font-weight-bold">Country</h4>
            <p>{{$team->pays}}</p>
            <hr>
            <h4 class="font-weight-bold">Continent</h4>
            <p>{{$team->continent}}</p>
            <hr>
            <h4 class="font-weight-bold">Maximum de joueurs</h4>
            <p>{{$team->max}}</p>
        </div>
        <div class="d-flex justify-content-center mt-4 mb-4">
            <a href="{{route('teams.edit', $team->id)}}"><button class="btn btn-primary">Edit</button></a>
            <form method="post" action="{{route('teams.destroy', $team->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mx-1" type="submit">Delete</button>
            </form>
            <a href="{{route('teams.index')}}"><button class="btn btn-dark">Retour</button></a>
        </div>
    </div>
@endsection