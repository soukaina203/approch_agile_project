@extends('layouts.app')
@section('content')
 <h1>{{ $matiere->Nom }}</h1>
 <p>{{ $matiere->description }}</p>
 <p>{{ $matiere->duree }}</p>
 <p>{{ $matiere->Niveau }}</p>
 <p>{{ $matiere->contenu }}</p>

@endsection
