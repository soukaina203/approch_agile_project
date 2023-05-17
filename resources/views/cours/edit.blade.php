@extends('layouts.app')

@section('content')
<form method="post" action="{{ url('Cours/'.$coursTargeted->id) }}" >
    @method('PATCH')
    @csrf
    <div class="form-group mb-3">
    <label for="title">le Titre :</label>
    <input type="text" class="form-control" id="title" placeholder="Entrez un produit" name="title"
    value='{{$coursTargeted->title}}'>
    </div>
    <div class="form-group mb-3">
    <label for="prix">le Contenu :</label>
    <input type="text" class="form-control" id="prix" placeholder="prix" name="description" value="{{$coursTargeted->description}}">
    </div>
    <div class="form-group mb-3">
        <label for="prix">le Prix de Produit:</label>
        <input type="text" class="form-control" id="prix" placeholder="prix"
         name="prix" value="{{$coursTargeted->description}}">
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
