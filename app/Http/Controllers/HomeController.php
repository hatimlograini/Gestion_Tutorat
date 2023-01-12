<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;


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
}
