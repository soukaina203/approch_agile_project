<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cour;

class coursController extends Controller
{
    public function index()
    {
        $Products = Cour::all();
        return view('first.index', ["prod" => $Products]);
    }


    public function create()
    {
        return view('first.create');
    }

    public function store(Request $request)
    {
        $Products = new Cour([
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "prof_id" => $request->input('prof_id'),
            "Matiere_id" => $request->input('Matiere_id'),

        ]);
        $Products->save();
        return redirect('/')->with('success', 'Personnage Ajouté avec succès');
    }


    public function show($id)
    {
        $product = Cour::findOrFail($id);
        return view('first.show', ['productTarget' => $product]);
    }


    public function edit($id)
    {
        $product = Cour::findOrFail($id);
        return view('first.edit', ['productTarget' => $product]);
    }

    public function update(Request $request, $id)
    {
        $Product = Cour::findOrFail($id);
        $Product->title = $request->input('title');
        $Product->description = $request->input('description');
        $Product->prof_id = $request->input('prof_id');
        $Product->Matiere_id = $request->input('Matiere_id');

        $Product->update();
        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }

    public function destroy($id)
    {
        $Product = Cour::findOrFail($id);
        $Product->delete();
        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }
}
