<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cour;
use App\Models\Prof;
use App\Models\Matiere;

class coursController extends Controller
{
    public function index()
    {
        $cours=Cour::all();
        $prof=[];
        $matier=[];
        for ($i = 0; $i < count($cours); $i++) {
            $profs = Prof::findOrFail($cours[$i]->prof_id);
            $mat = Matiere::findOrFail($cours[$i]->Matiere_id);
            array_push($prof, $profs->fullName);
            array_push($matier, $mat->Nom);
        }
        return view('cours.index',['cours'=>$cours,'profs'=>$prof,'matier'=>$matier]);
    }


    public function create()
    {
        return view('cours.create');
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
        return redirect('/Cours')->with('success', 'Personnage Ajouté avec succès');
    }


    public function show($id)
    {
        $product = Cour::findOrFail($id);
        return view('cours.show', ['productTarget' => $product]);
    }


    public function edit($id)
    {
        $cour = Cour::findOrFail($id);
        return view('cours.edit', ['coursTargeted' => $cour]);
    }

    public function update(Request $request, $id)
    {
        $Product = Cour::findOrFail($id);
        $Product->title = $request->input('title');
        $Product->description = $request->input('description');
        $Product->prof_id = $request->input('prof_id');
        $Product->Matiere_id = $request->input('Matiere_id');

        $Product->update();
        return redirect('/Cours')->with('success', 'Personnage Modifié avec succès');
    }

    public function destroy($id)
    {
        $Product = Cour::findOrFail($id);
        $Product->delete();
        return redirect('/Cours')->with('success', 'Personnage Modifié avec succès');
    }
}
