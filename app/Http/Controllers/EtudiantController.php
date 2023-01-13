<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\inscription;
use App\Models\Module;
use App\Models\Proposition;
use App\Models\Seance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    public function view_seance()
    {
        $users = User::all();
        $seances = Seance::all();
        $modules = Module::all();
        return view('user.viewSeance', compact('seances', 'users', 'modules'));
    }


    public function inscrire(Request $request)
    {

        $inscription = new inscription;
        $inscription->user_id = Auth::id();
        $inscription->id_seance = $request->id;

        $inscription->save();

        return redirect()->back();
    }



    public function view_inscription()
    {
        /*$data = inscription::join('seances', 'seances.id', '=', 'inscriptions.id_seance')
            ->join('users', 'users.id', '=', 'seances.tueur_id')
            ->join('modules', 'modules.id', '=', 'seances.module_id')
            ->get(['users.name', 'modules.nom']);*/

        $data = DB::select("select i.id, u.name, m.nom from inscriptions as i
            inner join seances as s on i.id_seance = s.id
            inner join users as u on s.tueur_id = u.id
            inner join modules as m on s.module_id = m.id");

        return view('user.view_inscription', compact('data'));
    }


    public function delete_inscription($id){
        $inscription = inscription::find($id);
        $inscription->delete();
        return redirect()->back();
    }

    public function proposition(){
        $modules = Module::all();
        return view('user.ajouterProposition',compact('modules'));
    }

    public function add_proposition(Request $request){

        $data = new Proposition();

        $data->user_id= Auth::id();

        $data->description = $request->description;

        $data->id_module = $request->module;

        $data->save();
        return redirect('/home');
    }

    public function ViewSeanceFeedback(){
        $data = DB::select("select s.id,s.Date ,s.Heure,s.Salle,s.Valide, u.name, m.nom
        from seances as s inner join users as u on s.tueur_id = u.id
        inner join modules as m on s.module_id = m.id where effectue = 1");
        return view('user.viewSeancesFeedback',compact('data'));
    }

    public function giveFeedback($id){
        
        return view('user.addFeedback',compact('id'));
    }
    public function add_feedback(Request $request){
        $data = new Feedback();
        $data->user_id = Auth::id();
        $data->id_seance = $request->id;
        $data->feedback = $request->feedback;
        $data->save();
        return redirect('/home');
    }
}
