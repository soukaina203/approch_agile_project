<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;

class matiereController extends Controller
{
    public function index()
    {
        $Matiere = Matiere::all();
        return view('first.index', ["prod" => $Matiere]);
    }


    public function create()
    {
        return view('first.create');
    }

    public function store(Request $request)
    {
        $Matiere = new Matiere([
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "prof_id" => $request->input('prof_id'),
            "Matiere_id" => $request->input('Matiere_id'),

        ]);
        $Matiere->save();
        return redirect('/')->with('success', 'Personnage Ajouté avec succès');
    }


    public function show($id)
    {
        $product = Matiere::findOrFail($id);
        return view('first.show', ['productTarget' => $product]);
    }


    public function edit($id)
    {
        $product = Matiere::findOrFail($id);
        return view('first.edit', ['productTarget' => $product]);
    }

    public function update(Request $request, $id)
    {
        $Product = Matiere::findOrFail($id);
        $Product->title = $request->input('title');
        $Product->description = $request->input('description');
        $Product->prof_id = $request->input('prof_id');
        $Product->Matiere_id = $request->input('Matiere_id');

        $Product->update();
        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }

    public function destroy($id)
    {
        $Product = Matiere::findOrFail($id);
        $Product->delete();
        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }
}
