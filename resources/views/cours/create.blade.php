@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('Cours/')}}" >
    @csrf
    <div class="form-group mb-3">
    <label for="title">le Titre :</label>
    <input type="text" class="form-control" id="title" name="title"
'>
    </div>
    <div class="form-group mb-3">
    <label for="prix">le Contenu :</label>
    <input type="text" class="form-control" id="prix"
    name="description" >
    </div>
    <div class="form-group mb-3">
        <label for="prix">Prof:</label>
<select class="form-control" name="prof_id" id="">
    <option value="">choisir le prof</option>
    @foreach ($profs as $item)
        <option value="{{$item->id}}">{{$item->fullName}}</option>
    @endforeach

</select>
        </div>



        <div class="form-group mb-3">
            <label for="prix">Matieres:</label>
    <select class="form-control" name="Matiere_id" id="">
    <option value="">choisir la matiere</option>

        @foreach ($matieres as $item)
            <option value="{{$item->id}}">{{$item->Nom}}</option>
        @endforeach

    </select>
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
