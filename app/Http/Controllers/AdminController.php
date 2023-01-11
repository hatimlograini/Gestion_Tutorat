<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function viewListerEtudiant(){
        $data = DB::select("SELECT * FROM users WHERE role=0");
        return view('admin.viewListerEtudiant', compact('data'));
    }

    public function validerTuteur(Request $request) {
        $id = $request->id;
        $user = User::find($id);
        $user->role = '1';
        $user->save();
        return redirect()->back();
    }

    public function supprimerEtudiant($id) {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }
}
