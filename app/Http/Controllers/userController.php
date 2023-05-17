<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;
use App\Models\Cour;
use App\Models\Prof;
use App\Models\Etudiant;

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




    public function handleLogin(Request $request)
    {
        $prof = Prof::where('email', $request->email)->first();
        $etud = Etudiant::where('email', $request->email)->first();

        // admin
        if ($request->email === 'admin@gmail.com' && $request->password === 'admin9') {
            return view('Admin.admin');
        }

        if ($prof && Hash::check($request->password, $prof->password)) {
            return view('Prof.prof', compact('prof'));
        }




        if ($etud && Hash::check($request->password, $etud->password)) {
            $cours=Cour::all();
            $prof=[];
            for ($i = 0; $i < count($cours); $i++) {
                $profs = Prof::findOrFail($cours[$i]->prof_id);
                array_push($prof, $profs->fullName);
            }
         return view('student.stud', ['etud'=>$etud,'cours'=>$cours,'profs'=>$prof]);
        }
        //



        return view('compo.landing', compact('msg'));
    }
}
