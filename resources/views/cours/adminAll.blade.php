@extends('layouts.app')
@section('content')
<div class="col-lg-1">
{{-- <a class="btn btn-success" href="{{url('Products/create') }}">Ajouter</a> --}}
</div>
<table class="table table-bordered">
    <tr>
    <th>No</th>
    <th>Titre</th>
    <th>Prof</th>
    <th>Matiere</th>
    <th>Actions</th>

    </tr>
    @for ($i = 0; $i < count($cours); $i++)

    <tr>
        <td>{{ $cours[$i]->id }}</td>
        <td>{{ $cours[$i]->title }}</td>
        <td>{{ $profs[$i] }}</td>
        <td>{{ $matier[$i] }}</td>

    <td>

        <form action="{{ url('Cours/'. $cours[$i]->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <a class="btn btn-info" href="{{ url('Cours/'.$cours[$i]->id) }}">Voir</a>
            <a class="btn btn-primary" href="{{ url('Cours/'. $cours[$i]->id .'/edit') }}">Modifier</a>
            <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>

            </td>
            </tr>
            @endfor

            </table>
            {{-- <a href="{{url('/login')}}">Login</a>
            <a href="">Register</a> --}}
@endsection
