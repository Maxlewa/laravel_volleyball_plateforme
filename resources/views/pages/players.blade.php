@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>PLAYERS</h1>
        <hr>
    </div>
    <div class="text-center mt-4">
        <a href={{route('home')}} class="btn btn-dark mx-2">HOME</a>
        <a href={{route('teams')}} class="btn btn-primary mx-2">TEAMS</a>
    </div>
    
@endsection