<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Hash;

class etudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Etudiants = Etudiant::all();
        return view('etudiant.index', ["etud" => $Etudiants]);
    }


    public function create()
    {
        return view('etudiant.create');
    }

    public function store(Request $request)
    {
        $Etudiants = new Etudiant([
            "fullName" => $request->input('fullName'),
            "email" => $request->input('email'),
            "Telephone" => $request->input('Telephone'),
            "niveauEtude" => $request->input('niveauEtude'),
            "password" =>  Hash::make($request->input('password')),


        ]);
        $Etudiants->save();
        // return view('Authi.login');
        return redirect('/Etudiants');
    }


    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.show', ['etudiant' => $etudiant]);
    }


    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.edit', ['etudiant' => $etudiant]);


    }

    public function update(Request $request, $id)
    {
        $Product = Etudiant::findOrFail($id);
        $Product->fullName = $request->input('fullName');
        $Product->email = $request->input('email');
        $Product->Telephone = $request->input('Telephone');
        $Product->niveauEtude = $request->input('niveauEtude');
        $Product->password = $request->input('password');

        $Product->update();
        return redirect('/Etudiants')->with('success', 'Personnage Modifié avec succès');
    }

    public function destroy($id)
    {
        $Product = Etudiant::findOrFail($id);
        $Product->delete();
        return redirect('/Etudiants')->with('success', 'Personnage Modifié avec succès');
    }
}
