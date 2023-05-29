@extends('Prof.prof')

@section('content1')
<form method="post" action="{{ url('Cours/'.$coursTargeted->id) }}" >
    @method('PATCH')
    @csrf
    <div class="form-group mb-3">
    <label for="title">le Titre :</label>
    <input type="text" class="form-control" id="title"
    placeholder="Entrez un produit" name="title"
    value='{{$coursTargeted->title}}'>
    </div>
    <div class="form-group mb-3">
    <label for="prix">le Contenu :</label>
    <input type="text" class="form-control" id="prix" placeholder="prix" name="description" value="{{$coursTargeted->description}}">
    </div>
    <div class="form-group mb-3">
        <label for="prix">Prof:</label>

        <select class="form-control" name="prof_id" id="" defaultValue="{{$prof->id}}">
            <option value="{{$prof->id}}">{{$prof->fullName}}</option>
            @foreach ($tsProf as $item)
                <option value="{{$item->id}}">{{$item->fullName}}</option>
            @endforeach

        </select>
        </div>



            <div class="form-group mb-3">
                <label for="prix">Matieres:</label>
        <select class="form-control" name="Matiere_id" defaultValue="{{$matiere->id}}" id="">
        <option value="{{$matiere->Nom}}">{{$matiere->Nom}}</option>

            @foreach ($tsMat as $item)
                <option value="{{$item->id}}">{{$item->Nom}}</option>
            @endforeach

        </select>
                </div>
        </div>
            </div>
    </div>

    </div>
    <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
