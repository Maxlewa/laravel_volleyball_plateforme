@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>HOME</h1>
        <hr>
    </div>
    <div class="text-center mt-4">
        <a href={{route('teams')}} class="btn btn-primary mx-2">TEAMS</a>
        <a href={{route('players')}} class="btn btn-success mx-2">PLAYERS</a>
    </div>
    <div class="text-center mt-4">
        <a href={{route('adminHome')}} class="btn btn-dark">ADMIN</a>
    </div>
    
@endsection