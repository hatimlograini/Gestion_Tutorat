<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TuteurController extends Controller
{
    public function view_proposition(){
        $data = DB::select("SELECT * FROM modules JOIN propositions ON modules.id = propositions.id_module JOIN users ON propositions.user_id = users.id");
        return view('tuteur.viewProposition',compact('data'));
        
    }
}
