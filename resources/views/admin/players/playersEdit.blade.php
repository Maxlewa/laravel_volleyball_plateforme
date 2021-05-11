@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>Edit the player</h1>
        <hr> 
    </div>
    <form class="w-50 mx-auto" action="{{route('players.update', $player->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col">
                <label for="prenom">First Name</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{$player->prenom}}">
            </div>
            <div class="form-group col">
                <label for="nom">Last Name</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{$player->nom}}">
            </div>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{$player->age}}">
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="phone">Telephone</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{$player->phone}}">
            </div>
            <div class="form-group col">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$player->email}}">
            </div>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country" value="{{$player->country}}">
        </div>

        {{-- <div class="form-group">
            <label for="color">Genre</label>
            <select class="form-control" id="genre" name="color_id">
                @foreach ($colors as $color)
                <option {{ $color->nom == $car->color->nom ? 'selected' : '' }} value="{{ $color->id }}">{{ $color->nom }}</option>       
                @endforeach  
            </select>
        </div> --}}

        {{-- GENRE --}}

        <div class="form-group">
            <label for="genre_id">Genre</label>
            <select class="form-control" id="genre_id" name="genre_id">
                @foreach ($genres as $genre)
                    <option {{$genre->nom == $player->genre->nom ? 'selected' : ''}} value={{$genre->id}}>{{$genre->nom}}</option>
                @endforeach
            </select>
        </div>

        {{-- ROLE --}}

        <div class="form-group">
            <label for="role_id">Role</label>
            <select class="form-control" id="role_id" name="role_id">
                @foreach ($roles as $role)
                    <option {{$role->nom == $player->role->nom ? 'selected' : ''}} value={{$role->id}}>{{$role->nom}}</option>
                @endforeach
            </select>
        </div>
        
        {{-- TEAM --}}

        <div class="form-group">
            <label for="team_id">Team</label>
            <select class="form-control" id="team_id" name="team_id">
                @foreach ($teams as $team)
                    <option {{$team->nom == $player->team->nom ? 'selected' : ''}} value={{$team->id}}>{{$team->nom}}</option>
                @endforeach
            </select>
        </div>

        {{-- PHOTO --}}

        <div class="my-4">
            <label for="photo" class="mr-2">Photo - File</label>
            <input type="file" name="photo" id="photo">
        </div>
        {{-- <div>
            <label for="photo">Photo - URL</label>
            <input type="text" name="photo" id="photo">
        </div> --}}

        
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection