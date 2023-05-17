@extends('layouts.app')

@section('content')
<form method="post" action="{{ url('Cours/'.$coursTargeted->id) }}" >
    @method('PATCH')
    @csrf
    <div class="form-group mb-3">
    <label for="title">le Titre :</label>
    <input type="text" class="form-control" id="title"
    placeholder="Entrez un produit" name="title"
    value='{{$coursTargeted->title}}'>
    </div>
    <div class="form-group mb-3">
    <label for="prix">le Contenu :</label>
    <input type="text" class="form-control" id="prix" placeholder="prix" name="description" value="{{$coursTargeted->description}}">
    </div>
    <div class="form-group mb-3">
        <label for="prix">Prof:</label>

    <input type="text" class="form-control"  id="prix"  value="{{$prof->fullName}}" name="" value="{{$coursTargeted->description}}">
    <input type="text" class="form-control"  id="prix" hidden  value="{{$prof->fullName}}" hidden name="prof_id" value="{{$coursTargeted->description}}">

        </div>



        <div class="form-group mb-3">
            <label for="prix">Matieres:</label>
            <input type="text" class="form-control"  value="{{$matiere->Nom}}" id="prix"  placeholder="prix" name="" value="{{$coursTargeted->description}}">
            <input type="text" class="form-control"  value="{{$matiere->Nom}}" id="prix" hidden placeholder="prix" name="Matiere_id" value="{{$coursTargeted->description}}">

            </div>
    </div>

    </div>
    <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
