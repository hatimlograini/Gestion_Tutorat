<?php

namespace App\Http\Controllers;

use App\Models\inscription;
use App\Models\Module;
use App\Models\Seance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect() {
        if(Auth::id()) {
            if(Auth::user()->role=='0') {
                return view('user.home');
            }

            else if (Auth::user()->role=='1') {
                return view('tuteur.home');
            }
            else {
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function view_seance(){
        $users = User::all();
        $seances = Seance::all();
        $modules = Module::all();
        return view('user.viewSeance',compact('seances','users','modules'));
    }


    public function inscrire(Request $request, $id){

        $inscription = new inscription;
        $inscription->user_id = Auth::id();
        $inscription->id_seance = $request->id;

        $inscription->save();

        return redirect()->back();
    }
}
