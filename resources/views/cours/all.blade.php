@extends('Prof.prof')
@section('content1')
<div class="col-lg-1">
{{-- <a class="btn btn-success" href="{{url('Products/create') }}">Ajouter</a> --}}
</div>
<h1>TOUS LES COURS</h1>
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


            <a class="btn btn-info" href="{{ url('Cours/'.$cours[$i]->id) }}">Voir</a>


            </td>
            </tr>
            @endfor

            </table>
            {{-- <a href="{{url('/login')}}">Login</a>
            <a href="">Register</a> --}}
@endsection

