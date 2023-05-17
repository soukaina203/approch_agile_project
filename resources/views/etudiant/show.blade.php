@extends('layouts.app')
@section('content')
 <h1>{{ $etudiant->fullName }}</h1>


 <p>{{ $etudiant->email }}</p>
 <p>{{ $etudiant->Telephone }}</p>
 <p>{{ $etudiant->niveauEtude }}</p>

@endsection
