<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prof;
use Illuminate\Support\Facades\Hash;

class profController extends Controller
{
    public function index()
    {
        $Profs = Prof::all();
        return view('first.index', ["prod" => $Profs]);
    }


    public function create()
    {
        return view('compo.create');
    }

    public function store(Request $request)
    {
        $Profs = new Prof([
            "fullName" => $request->input('fullName'),
            "email" => $request->input('email'),
            "Telephone" => $request->input('Telephone'),
            "password" =>  Hash::make($request->input('password')),

        ]);
        $Profs->save();
        return redirect('/')->with('success', 'Personnage Ajouté avec succès');
    }


    public function show($id)
    {
        $Profs = Prof::findOrFail($id);
        return view('first.show', ['ProfsTarget' => $Profs]);
    }


    public function edit($id)
    {
        $Profs = Prof::findOrFail($id);
        return view('first.edit', ['ProfsTarget' => $Profs]);


    }

    public function update(Request $request, $id)
    {
        $Profs = Prof::findOrFail($id);
        $Profs->fullName = $request->input('fullName');
        $Profs->email = $request->input('email');
        $Profs->Telephone = $request->input('Telephone');

        $Profs->update();
        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }

    public function destroy($id)
    {
        $Profs = Prof::findOrFail($id);
        $Profs->delete();
        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }
}
