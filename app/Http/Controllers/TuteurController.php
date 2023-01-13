<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Module;
use App\Models\Seance;

class TuteurController extends Controller
{
    public function view_proposition(){
        //$id = Auth::user()->id();
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

    public function tuteurviewSeance(){
        $id = Auth::id();
        $V = 1;
        $E = 0;
        $data = DB::table('seances')
        ->join('users', 'seances.tueur_id', 'users.id')
        ->join('modules', 'seances.module_id', 'modules.id')
        ->where('seances.tueur_id',$id)
        ->where('seances.Valide',$V)
        ->where('seances.effectue',$E)
        ->select('seances.id','seances.Date','seances.tueur_id','users.name','modules.nom','seances.Heure')
        ->get();

        return view('tuteur.viewSeance',compact('data'));

        }
        public function SeanceEffectue(Request $request){
            $id = $request->id;
            $data = Seance::find($id);
            $data->effectue = '1';
            $data->save();

            $data2 = new  Historique();
            $data2->tueur_id = Auth::id();
            $data2->seance_id = $id;
            $data2->save();

            return redirect()->back();
        }

        public function tuteurviewHistorique(){
            $id =  Auth::id();
            $data = DB::select("select h.id, u.name, s.Date ,s.Heure,m.nom from historiques as h
            inner join seances as s on h.seance_id = s.id
            inner join users as u on h.tueur_id = u.id
            inner join modules as m on s.module_id = m.id");

            return view('tuteur.viewHistorique',compact('data'));
        }
}
