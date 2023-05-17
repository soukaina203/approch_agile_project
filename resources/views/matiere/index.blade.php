@extends('layouts.app')
@section('content')
<div class="col-lg-1">
{{-- <a class="btn btn-success" href="{{url('Products/create') }}">Ajouter</a> --}}
</div>
<table class="table table-bordered">
    <tr>
    <th>No</th>
    <th>Nom</th>
    <th>Description</th>
    <th>Duree</th>
    <th>Niveau</th>
    <th>Contenu</th>
    <th>Actions</th>

    </tr>
    @foreach ($Matieres as $index => $Matiere)


    <tr>
        <td>{{ $Matiere->id }}</td>
        <td>{{ $Matiere->Nom }}</td>
        <td>{{ $Matiere->description }}</td>
        <td>{{ $Matiere->duree }}</td>
        <td>{{ $Matiere->Niveau }}</td>
        <td>{{ $Matiere->contenu }}</td>

    <td>

        <form action="{{ url('Matiere/'. $Matiere->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <a class="btn btn-info" href="{{ url('Matiere/'.$Matiere->id) }}">Voir</a>
            <a class="btn btn-primary" href="{{ url('Matiere/'. $Matiere->id .'/edit') }}">Modifier</a>
            <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>

            </td>
            </tr>
            @endforeach

            </table>
            {{-- <a href="{{url('/login')}}">Login</a>
            <a href="">Register</a> --}}
@endsection

