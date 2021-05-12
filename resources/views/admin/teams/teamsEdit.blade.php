@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>Edit the team</h1>
        <hr> 
    </div>
    <form class="w-50 mx-auto" action="{{route('teams.update', $team->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nom">Club</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{$team->nom}}">
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" value="{{$team->ville}}">
        </div>
        <div class="form-group">
            <label for="pays">Country</label>
            <input type="text" class="form-control" id="pays" name="pays" value="{{$team->pays}}">
        </div>
        <div class="form-group">
            <label for="continent">Continent</label>
            <input type="text" class="form-control" id="continent" name="continent" value="{{$team->continent}}">
        </div>
        <div class="form-group">
            <label for="max">Maximum de joueurs</label>
            <input type="number" class="form-control" id="max" name="max" value="{{$team->max}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection