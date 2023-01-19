<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

                $seances = DB::select('select count(*) as seancesC from seances where effectue = 1');
                $tuteurs = DB::select('select count(*) as tuteurC from users where role = 1');
                $etds = DB::select('select count(*) as etdC from users where role = 0');
                $Ms = DB::select('select count(*) as modulesC from modules');
                return view('admin.home',compact('tuteurs','seances','etds','Ms'));

            }
        } else {
            return redirect()->back();
        }
    }
}
