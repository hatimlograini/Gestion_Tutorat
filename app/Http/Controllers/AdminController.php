<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Seance;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use Barryvdh\DomPDF\PDF;

use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function viewListerEtudiant(){
        $data = DB::select("SELECT * FROM users WHERE role=0");
        return view('admin.viewListerEtudiant', compact('data'));
    }

    public function viewListerTuteur(){
        $data = DB::select("SELECT * FROM users WHERE role=1");
        return view('admin.viewListerTuteur', compact('data'));
    }

    public function viewListerModule(){
        $data = Module::all();
        return view('admin.viewListerModule', compact('data'));
    }

    public function viewListerFeedback(){
        $data = DB::select("SELECT u.name, f.feedback FROM feedback f JOIN users u ON f.user_id = u.id");
        return view('admin.viewListerFeedback', compact('data'));
    }

    public function viewAddModule(){

        return view('admin.addModule');
    }

    public function viewListerSeance(){
        $data = DB::select("SELECT s.id, u.name, s.Date, s.Heure, s.Salle FROM seances s JOIN users u ON s.tueur_id = u.id WHERE s.Valide = 0");
        return view('admin.viewListerSeance', compact('data'));
    }

    public function validerTuteur(Request $request) {
        $id = $request->id;
        $user = User::find($id);
        $user->role = '1';
        $user->save();
        return redirect()->back();
    }



    public function seanceValide(Request $request) {
        $id = $request->id;
        $seance = Seance::find($id);
        $seance->Valide = '1';
        $seance->save();
        return redirect()->back();
    }


    public function supprimerEtudiant($id) {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function supprimerModule($id) {
        $data = Module::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function addModule(Request $request){
        $data = new Module();
        $data->nom = $request->nom;
        $data->save();
        return redirect('/viewListerModule');
    }

    public function View_tuteur_PDF(){
        $data = DB::select("SELECT * FROM users WHERE role=1");

        return view('admin.viewTutueur_PDF',compact('data'));

    }

    public function Generer_PDF($id){
        $user = User::find($id);

        $pdf = PDF::loadView('admin.Tuteur_PDF',['user' => $user]);

        //dd($date);
        return $pdf->stream($user->name . '' . $user->prenom . 'pdf');
        /*return response()->download(
            fn () => print($pdf),
            "filename.pdf"
       );*/
    }
}
