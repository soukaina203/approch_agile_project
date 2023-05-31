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
    <th>Actions</th>

    </tr>
    @foreach ($profs as $index => $prof)

    <tr>
        <td>{{ $prof->id }}</td>
        <td>{{ $prof->fullName }}</td>
        <td>{{ $prof->email}}</td>
        <td>{{ $prof->Telephone }}</td>

    <td>

        <form action="{{ url('Profs/'. $prof->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <a class="btn btn-info" href="{{ url('Profs/'.$prof->id) }}">Voir</a>
            <a class="btn btn-primary" href="{{ url('Profs/'. $prof->id .'/edit') }}">Modifier</a>
            <a class="btn btn-primary" href="{{ url('ProfCours/'. $prof->id ) }}">Voir tous ses cours</a>

            <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>

            </td>
            </tr>
            @endforeach

            </table>

@endsection

