
@extends('layouts.app')

@section('content')
<div class="centered-header">
<p class="user">{{$etud->fullName}} </p>
<table class="table table-bordered">
    <tr>
    <th>No</th>
    <th>Titre</th>
    <th>Prof</th>

    </tr>
@for ($i = 0; $i < count($cours); $i++)

    <tr>
    <td>{{ $i }}</td>
    <td>{{ $cours[$i]->titre }}</td>
    <td>{{ $profs[$i] }}</td>

    <td>

    <a class="btn btn-info" href="{{ url('Cours/'. $cours[$i]->id) }}">Voir</a>
    </form>
    </td>
    </tr>
</table>
@endfor

</div>
@endsection
