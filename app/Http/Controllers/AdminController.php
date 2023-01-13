<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
