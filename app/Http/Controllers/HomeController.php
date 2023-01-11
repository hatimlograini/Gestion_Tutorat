<?php

namespace App\Http\Controllers;

use App\Models\inscription;
use App\Models\Module;
use App\Models\Seance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->role == '0') {
                return view('user.home');
            } else if (Auth::user()->role == '1') {
                return view('tuteur.home');
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

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
}
