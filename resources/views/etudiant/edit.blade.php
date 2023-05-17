
@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('Etudiants/'.$etudiant->id)}}">
 @method('PATCH')

    @csrf

    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">FullName</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="fullName"
             value="{{$etudiant->fullName}}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

        <div class="col-md-6">
            <input id="email" type="email"   value="{{$etudiant->email}}" class="form-control @error('email') is-invalid @enderror" name="email"
             value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">Telephone</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('password') is-invalid @enderror"
               value="{{$etudiant->Telephone}}" name="Telephone" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Niveau d'etude</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="niveauEtude"
              value="{{$etudiant->niveauEtude}}" required autocomplete="new-password">
        </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Password</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control"  name="password"    value="{{$etudiant->fullName}}" required autocomplete="new-password">
        </div>
    </div>
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>
@endsection
