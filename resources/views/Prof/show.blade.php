@extends('layouts.app')
@section('content')
 <h1>{{ $ProfsTarget->fullName }}</h1>


 <p>{{ $ProfsTarget->email }}</p>
 <p>{{ $ProfsTarget->Telephone }}</p>

@endsection
