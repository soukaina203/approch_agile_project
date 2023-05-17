@extends('layouts.app')

@section('content')
<div class="centered-header">

    <a href="{{ url('signUp/etudiant') }}" class="btn btn-primary">Etudiant</a>

    <a href="{{ url('signUp/prof') }}" class="btn btn-primary">Prof</a>
</div>
@endsection
