<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cour;
use App\Models\Prof;
use App\Models\Matiere;

class coursController extends Controller
{
    public function all(Request $request)
    {
        $profName = $request->session()->get('prof_name');

        $cours = Cour::all();
        $prof = [];
        $matier = [];
        for ($i = 0; $i < count($cours); $i++) {
            $profs = Prof::findOrFail($cours[$i]->prof_id);
            $mat = Matiere::findOrFail($cours[$i]->Matiere_id);
            array_push($prof, $profs->fullName);
            array_push($matier, $mat->Nom);
        }
        return view('cours.all', [
            'cours' => $cours, 'profs' => $prof,
            'matier' => $matier, 'prof_name' => $profName
        ]);
    }

    public function studentStatus($id, Request $request)
    {
        $etud_name = $request->session()->get('etud_name');

        $product = Cour::findOrFail($id);
        return view('etudiant.voirCours', ['productTarget' => $product, 'etud_name' => $etud_name]);
    }

public function adminCours(){
    $cours = Cour::all();
    $prof = [];
    $matier = [];
    for ($i = 0; $i < count($cours); $i++) {
        $profs = Prof::findOrFail($cours[$i]->prof_id);
        $mat = Matiere::findOrFail($cours[$i]->Matiere_id);
        array_push($prof, $profs->fullName);
        array_push($matier, $mat->Nom);
    }
    return view('cours.adminAll', [
        'cours' => $cours, 'profs' => $prof,
        'matier' => $matier,
    ]);
}

    public function index(Request $request)
    {
        $profName = $request->session()->get('prof_name');
        $profId = $request->session()->get('prof_id');
        $cours = Cour::where('prof_id', $profId)->get();
        $prof = [];
        $matier = [];
        for ($i = 0; $i < count($cours); $i++) {
            $profs = Prof::findOrFail($cours[$i]->prof_id);
            $mat = Matiere::findOrFail($cours[$i]->Matiere_id);
            array_push($prof, $profs->fullName);
            array_push($matier, $mat->Nom);
        }
        // dd($prof);
        // Retrieve the value from the session

        return view('cours.index', [
            'cours' => $cours, 'profs' => $prof,
            'matier' => $matier, 'prof_name' => $profName
        ]);
    }
    public function research(Request $request)
    {
        $name = $request->input('rechercher');
        $cours = Cour::where('title', 'like', '%' . $name . '%')
            ->get();
        $profName = $request->session()->get('prof_name');

        $prof = [];
        $matier = [];
        for ($i = 0; $i < count($cours); $i++) {
            $profs = Prof::findOrFail($cours[$i]->prof_id);
            $mat = Matiere::findOrFail($cours[$i]->Matiere_id);
            array_push($prof, $profs->fullName);
            array_push($matier, $mat->Nom);
        }
        return view(
            'cours.search',
            [
                'cours' => $cours, 'profs' => $prof,
                'prof_name' => $profName, 'matier' => $matier
            ]
        );
    }
    public function research2(Request $request)
    {
        $name = $request->input('rechercher');
        $cours = Cour::where('title', 'like', '%' . $name . '%')
            ->get();
        $etu = $request->session()->get('etud_name');

        $prof = [];
        $matier = [];
        for ($i = 0; $i < count($cours); $i++) {
            $profs = Prof::findOrFail($cours[$i]->prof_id);
            $mat = Matiere::findOrFail($cours[$i]->Matiere_id);
            array_push($prof, $profs->fullName);
            array_push($matier, $mat->Nom);
        }
        return view(
            'cours.search2',
            [
                'cours' => $cours, 'profs' => $prof,
                'etud_name' => $etu, 'matier' => $matier
            ]
        );
    }

    public function create(Request $request)
    {
        $prof = Prof::all();
        $profName = $request->session()->get('prof_name');

        $matiers = Matiere::all();
        return view('cours.create', [
            'profs' => $prof, 'matieres' => $matiers,
            'prof_name' => $profName
        ]);
    }

    public function store(Request $request)
    {
        $profName = $request->session()->get('prof_name');

        $Products = new Cour([
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "prof_id" => $request->input('prof_id'),
            "Matiere_id" => $request->input('Matiere_id'),

        ]);
        $Products->save();
        return redirect('/Cours')->with('success', 'Personnage Ajouté avec succès');
    }


    public function show($id, Request $request)
    {
        $profName = $request->session()->get('prof_name');

        $product = Cour::findOrFail($id);
        return view('cours.show', ['productTarget' => $product, 'prof_name' => $profName]);
    }


    public function edit($id, Request $request)

    {
        $profName = $request->session()->get('prof_name');
        $cour = Cour::findOrFail($id);
        $prof = Prof::findOrFail($cour->prof_id);
        $matiere = Matiere::findOrFail($cour->Matiere_id);
        $tsMat = Matiere::all();
        $tsProf = Prof::all();
        return view(
            'cours.edit',
            [
                'coursTargeted' => $cour, 'prof_name' => $profName, 'tsProf' => $tsProf,
                'prof' => $prof, 'matiere' => $matiere, 'tsMat' => $tsMat
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $profName = $request->session()->get('prof_name');

        $Product = Cour::findOrFail($id);
        $Product->title = $request->input('title');
        $Product->description = $request->input('description');
        $Product->prof_id = $request->input('prof_id');
        $Product->Matiere_id = $request->input('Matiere_id');

        $Product->update();
        return redirect('/Cours')->with('success', 'Personnage Modifié avec succès');
    }

    public function destroy($id, Request $request)
    {
        $profName = $request->session()->get('prof_name');

        $Product = Cour::findOrFail($id);
        $Product->delete();
        return redirect('/Cours')->with('success', 'Personnage Modifié avec succès');
    }
}
