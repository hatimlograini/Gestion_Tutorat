<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Module;
use App\Models\Seance;

class TuteurController extends Controller
{
    public function view_proposition(){
        $data = DB::select("SELECT * FROM modules JOIN propositions ON modules.id = propositions.id_module JOIN users ON propositions.user_id = users.id");
        return view('tuteur.viewProposition',compact('data'));

    }

    public function add_seance(){
        $modules = Module::all();
        return view('tuteur.ajouterSeance',compact('modules'));
    }

    public function add_seanceADD(Request $request){
        $seances = new Seance();

        $seances->tueur_id = Auth::id();
        $seances->module_id = $request->module;
        $seances->Date= $request->Date;
        $seances->Salle = $request->Salle;
        $seances->Heure = $request->Heure;

        $seances->save();
        return redirect()->back();

    }
}
