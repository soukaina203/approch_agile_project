@extends('layouts.app')
@section('content')
 @if ($errors->any())
 <div class="alert alert-danger">
    <br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ url('Profs/'. $ProfsTarget->id) }}" >
 @method('PATCH')
 @csrf
 <div class="form-group mb-3">
 <label for="nom">Nom:</label>
 <input type="text" class="form-control" id="nom" placeholder="Entrer Nom"
  name="fullName"
 value="{{ $ProfsTarget->fullName }}">
 </div>

 <div class="form-group mb-3">
    <label for="nom">Email:</label>
    <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="email"
    value="{{ $ProfsTarget->email }}">
    </div>

    <div class="form-group mb-3">
        <label for="nom">Telephone:</label>
        <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="Telephone"
        value="{{ $ProfsTarget->Telephone }}">
        </div>
        <div class="form-group mb-3">
            <label for="nom">password:</label>
            <input type="password" class="form-control" id="nom" placeholder="Entrer password" name="password"
           />
            </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
   @endsection
