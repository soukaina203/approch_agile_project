<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;
use App\Models\Cour;
use App\Models\Prof;
use App\Models\Etudiant;
use App\Models\Matiere;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    public function choosenPage()
    {
        return view('choose');
    }

    public function login()
    {
        return view('Authi.login',);
    }
    public function signUp($any)
    {
        return view('Authi.signUp', compact('any'));
    }


    public function logOut()
    {
        Session::forget('prof_name');


        return view('Authi.login');
    }

    public function handleLogin(Request $request)
    {
        $prof = Prof::where('email', $request->email)->first();
        $etud = Etudiant::where('email', $request->email)->first();

        // admin
        if ($request->email === 'admin@gmail.com' && $request->password === 'admin9') {
            return view('Admin.admin');
        }

        if ($prof && Hash::check($request->password, $prof->password)) {
            session(['prof_name' => $prof->fullName]);
            session(['prof_id' => $prof->id]);
            $prof_name = $prof->fullName;
            return view('Prof.prof', compact('prof_name'));
        }




        if ($etud && Hash::check($request->password, $etud->password)) {
            session(['etud_name' => $etud->fullName]);

            $cours = Cour::all();
            $prof = [];
            $matier = [];

            for ($i = 0; $i < count($cours); $i++) {
                $profs = Prof::findOrFail($cours[$i]->prof_id);
                $mat = Matiere::findOrFail($cours[$i]->Matiere_id);
                array_push($prof, $profs->fullName);
                array_push($matier, $mat->Nom);
            }
            return view('etudiant.stud', [
                'etud' => $etud, 'cours' => $cours, 'profs' => $prof,
                'matiers' => $matier
            ]);
        }
        //



        return view('compo.landing', compact('msg'));
    }
}
