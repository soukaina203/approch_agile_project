
@extends('layouts.app')

@section('content')
<br>
<form action="{{url('search/etud')}}" method="POST">
    @csrf
<input placeholder="Rechercher"type="text"class="form-control"
name="rechercher">
<input type="submit">
</form>
<div class="centered-header">
<p class="user">{{$etud->fullName}} </p>
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
    <td>{{ $matiers[$i] }}</td>
{{-- userController --}}
    <td>

    <a class="btn btn-info" href="{{ url('Cours/'. $cours[$i]->id).'/etud' }}">Voir</a>
    </form>
    </td>
    </tr>
    @endfor
</table>

</div>
@endsection
