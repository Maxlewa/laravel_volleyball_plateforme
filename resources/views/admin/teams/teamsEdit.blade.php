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
            <input type="text" class="form-control @error ('nom') is-invalid @enderror" id="nom" name="nom" value="{{$team->nom}}">
            @error('nom')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control @error ('ville') is-invalid @enderror" id="ville" name="ville" value="{{$team->ville}}">
            @error('ville')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="pays">Country</label>
            <input type="text" class="form-control @error ('pays') is-invalid @enderror" id="pays" name="pays" value="{{$team->pays}}">
            @error('pays')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="continent">Continent</label>
            <input type="text" class="form-control @error ('continent') is-invalid @enderror" id="continent" name="continent" value="{{$team->continent}}">
            @error('continent')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="max">Maximum de joueurs</label>
            <input type="number" class="form-control @error ('max') is-invalid @enderror" id="max" name="max" value="{{$team->max}}">
            @error('max')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection