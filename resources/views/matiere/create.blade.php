@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('Cours/')}}" >
    @csrf
    <div class="form-group mb-3">
    <label for="title">le Nom :</label>
    <input type="text" class="form-control" id="title" name="Nom"'>
    </div>

    <div class="form-group mb-3">
    <label for="prix"> description :</label>
    <input type="text" class="form-control" id="prix"name="description" >
    </div>

    <div class="form-group mb-3">
        <label for="prix"> Duree :</label>
        <input type="text" class="form-control" id="prix"name="duree" >
        </div>

        <div class="form-group mb-3">
            <label for="prix"> Niveau :</label>
            <input type="text" class="form-control" id="prix"name="Niveau" >
            </div>

            <div class="form-group mb-3">
                <label for="prix"> contenu :</label>
                <input type="text" class="form-control" id="prix"name="contenu" >
                </div>
    <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
