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

    </tr>
    @for ($i = 0; $i < count($cours); $i++)

    <tr>
        <td>{{ $i }}</td>
        <td>{{ $cours[$i]->title }}</td>
        <td>{{ $profs[$i] }}</td>
        <td>{{ $matier[$i] }}</td>

    {{-- <td>

            <a class="btn btn-info" href="{{ url('Products/'. $product->id) }}">Voir</a>
            <a class="btn btn-primary" href="{{ url('Products/'. $product->id .'/edit') }}">Modifier</a>
            <a class="btn btn-danger" href="{{ url('Products/'. $product->id .'/delete') }}">Supprimer</a>

            </td> --}}
            </tr>
            @endfor

            </table>
            {{-- <a href="{{url('/login')}}">Login</a>
            <a href="">Register</a> --}}
@endsection

