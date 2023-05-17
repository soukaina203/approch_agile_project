<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;

class matiereController extends Controller
{
    public function index()
    {
        $Matiere = Matiere::all();
        return view('matiere.index', ["Matieres" => $Matiere]);
    }


    public function create()
    {
        return view('matiere.create');
    }

    public function store(Request $request)
    {
        $Matiere = new Matiere([
            "Nom" => $request->input('Nom'),
            "description" => $request->input('description'),
            "duree" => $request->input('duree'),
            "Niveau" => $request->input('Niveau'),
            "contenu" => $request->input('contenu'),

        ]);
        $Matiere->save();
        return redirect('/Matiere')->with('success', 'Personnage Ajouté avec succès');
    }


    public function show($id)
    {
        $matieres = Matiere::findOrFail($id);
        return view('matiere.show', ['matiere' => $matieres]);
    }


    public function edit($id)
    {
        $Matiere = Matiere::findOrFail($id);
        return view('matiere.edit', ['Matiere' => $Matiere]);
    }

    public function update(Request $request, $id)
    {
        $Product = Matiere::findOrFail($id);
        $Product->Nom = $request->input('Nom');
        $Product->description = $request->input('description');
        $Product->duree = $request->input('duree');
        $Product->Niveau = $request->input('Niveau');
        $Product->contenu = $request->input('contenu');

        $Product->update();
        return redirect('/Matiere')->with('success', 'Personnage Modifié avec succès');
    }

    public function destroy($id)
    {
        $Product = Matiere::findOrFail($id);
        $Product->delete();
        return redirect('/Matiere')->with('success', 'Personnage Modifié avec succès');
    }
}
