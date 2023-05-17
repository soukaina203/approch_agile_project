<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prof;
use App\Models\Etudiant;

class userController extends Controller
{
public function sendLogin (){
return view('compo.login');
}
    public function login(Request $request)
    {
        $prof = null;
        $etud = null;
        $msg = null;

        $prof = Prof::where('email', $request->email)
            ->where('password', Hash::make($request->input('password')))
            ->first();

        $etud = Etudiant::where('email', $request->email)
            ->where('password', Hash::make($request->input('password')))
            ->first();
        if ($prof || $etud) {
            if ($prof) {
                return view('compo.landing', compact('prof'));
            }
            if ($etud) {
                return view('compo.landing', compact('etud'));
            }
        } else {
            $msg = 'nothing';
            return view('compo.landing', compact('msg'));
        }
    }
}
