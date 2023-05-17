@extends('layouts.app')

@section('content')
<form method="post" action="{{ url('Matiere/'.$Matiere->id) }}" >
    @method('PATCH')
    @csrf
    <div class="form-group mb-3">
    <label for="title">le Nom :</label>
    <input type="text" class="form-control" id="title"
    placeholder="Entrez un produit" name="Nom"
    value='{{$Matiere->Nom}}'>
    </div>
    <div class="form-group mb-3">
    <label for="prix"> description :</label>
    <input type="text" class="form-control" id="prix" placeholder="prix" name="description"
     value="{{$Matiere->description}}">
    </div>
    <div class="form-group mb-3">
        <label for="prix">duree:</label>

    <input type="text" class="form-control"  id="prix"  value="{{$Matiere->duree}}" name="duree" >

        </div>



        <div class="form-group mb-3">
            <label for="prix">Niveau:</label>
            <input type="text" class="form-control"  value="{{$Matiere->Niveau}}" id="prix"  placeholder="prix" name="Niveau">

            </div>

            <div class="form-group mb-3">
                <label for="prix">contenu:</label>
                <input type="text" class="form-control"  value="{{$Matiere->contenu}}" id="prix"  placeholder="prix" name="contenu" >

                </div>
    </div>

    </div>
    <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
