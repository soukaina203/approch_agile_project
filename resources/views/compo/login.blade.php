@extends('layouts.app')

@section('content')
<form action="{{ url('login') }}" method="post">
    @csrf

    <div class="form-group mb-3">
    <label for="prix">Eamil:</label>
    <input type="text" class="form-control" id="prix" placeholder="prix" name="email">
    </div>

    <div class="form-group mb-3">
            <label for="prix">password:</label>
            <input type="text" class="form-control"
             name="password">
            </div>
    </div>

    </div>
    <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
