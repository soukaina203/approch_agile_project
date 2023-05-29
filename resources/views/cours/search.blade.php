@extends('Prof.prof')

@section('content1')
@if ($cours->isEmpty())
  <h2>No Result</h2>
@else
<h1>Results</h1>
  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Titre</th>
      <th>Prof</th>
      <th>Matiere</th>
      <th>Actions</th>
    </tr>
    @foreach ($cours as $index => $cour)
    <tr>
      <td>{{ $cour->id }}</td>
      <td>{{ $cour->title }}</td>
      <td>{{ $profs[$index] }}</td>
      <td>{{ $matier[$index] }}</td>
      <td>
        <a class="btn btn-info" href="{{ url('Cours/'. $cour->id).'/etud' }}">Voir</a>
      </td>
    </tr>
    @endforeach
  </table>
@endif

@endsection

