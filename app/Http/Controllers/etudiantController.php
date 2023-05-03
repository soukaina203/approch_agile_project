<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class etudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Etudiants = Etudiant::all();
        return view('first.index', ["prod" => $Etudiants]);
    }


    public function create()
    {
        return view('first.create');
    }

    public function store(Request $request)
    {
        $Etudiants = new Etudiant([
            "fullName" => $request->input('fullName'),
            "email" => $request->input('email'),
            "Telephone" => $request->input('Telephone'),
            "niveauEtude" => $request->input('niveauEtude'),

        ]);
        $Etudiants->save();
        return redirect('/')->with('success', 'Personnage Ajouté avec succès');
    }


    public function show($id)
    {
        $product = Etudiant::findOrFail($id);
        return view('first.show', ['productTarget' => $product]);
    }


    public function edit($id)
    {
        $product = Etudiant::findOrFail($id);
        return view('first.edit', ['productTarget' => $product]);


    }

    public function update(Request $request, $id)
    {
        $Product = Etudiant::findOrFail($id);
        $Product->fullName = $request->input('fullName');
        $Product->email = $request->input('email');
        $Product->Telephone = $request->input('Telephone');
        $Product->niveauEtude = $request->input('niveauEtude');

        $Product->update();
        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }

    public function destroy($id)
    {
        $Product = Etudiant::findOrFail($id);
        $Product->delete();
        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }
}
