@extends('layouts.app')
@section('content')



<table class="table table-bordered">
    <tr>
    <th>No</th>
    <th>Titre</th>
    <th>Description</th>
    <th>Matiere</th>

    </tr>
    @for ($i = 0; $i < count($cours); $i++)


    <tr>
        <td>{{ $cours[$i]->id }}</td>
        <td>{{ $cours[$i]->title }}</td>
        <td>{{ $cours[$i]->description}}</td>
        @foreach ($Matiere as $matiere)
            @if ($matiere->id === $cours[$i]->Matiere_id)
                <td>{{ $matiere->Nom }}</td>
            @endif
        @endforeach


            </tr>
            @endfor

            </table>
@endsection
