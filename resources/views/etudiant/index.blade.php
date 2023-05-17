@extends('layouts.app')
@section('content')
<div class="col-lg-1">
{{-- <a class="btn btn-success" href="{{url('Products/create') }}">Ajouter</a> --}}
</div>
<table class="table table-bordered">
    <tr>
    <th>No</th>
    <th>FullName</th>
    <th>Email</th>
    <th>Telephone</th>
    <th>niveauEtude</th>
    <th>Actions</th>

    </tr>
    @foreach ($etud as $index => $etudiant)

    <tr>
        <td>{{ $etudiant->id }}</td>
        <td>{{ $etudiant->fullName }}</td>
        <td>{{ $etudiant->email}}</td>
        <td>{{ $etudiant->Telephone }}</td>
        <td>{{ $etudiant->niveauEtude }}</td>

    <td>

        <form action="{{ url('Etudiants/'. $etudiant->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <a class="btn btn-info" href="{{ url('Etudiants/'.$etudiant->id) }}">Voir</a>
            <a class="btn btn-primary" href="{{ url('Etudiants/'. $etudiant->id .'/edit') }}">Modifier</a>
            <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>

            </td>
            </tr>
            @endforeach

            </table>

@endsection

