@extends('layouts.index')

@section('content')
    <div class="text-center mt-4">
        <h1>Add a team</h1>
        <hr>
    </div>
    <form class="w-50 mx-auto" action={{route('teams.store')}} method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nom">Club</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville">
        </div>
        <div class="form-group">
            <label for="pays">Country</label>
            <input type="text" class="form-control" id="pays" name="pays">
        </div>
        <div class="form-group">
            <label for="continent">Continent</label>
            <input type="text" class="form-control" id="continent" name="continent">
        </div>
        <div class="form-group">
            <label for="max">Maximum de joueur</label>
            <input type="number" class="form-control" id="max" name="max">
        </div>

        <button type="submit" class="btn btn-warning">ADD</button>
    </form>

@endsection