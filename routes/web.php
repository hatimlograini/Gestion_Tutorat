<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TuteurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class,'redirect']);

Route::get('/view_seance',[EtudiantController::class,'view_seance']);

Route::get('/inscrire_seance/{id}',[EtudiantController::class,'inscrire']);

Route::get('/view_inscription',[EtudiantController::class,'view_inscription']);

Route::get('/delete_inscription/{id}',[EtudiantController::class,'delete_inscription']);

Route::get('/proposition',[EtudiantController::class,'proposition']);

Route::post('/add_proposition',[EtudiantController::class,'add_proposition']);

Route::get('/ViewSeanceFeedback',[EtudiantController::class,'ViewSeanceFeedback']);

Route::get('/giveFeedback/{id}',[EtudiantController::class,'giveFeedback']);

Route::post('/add_feedback/{id}',[EtudiantController::class,'add_feedback']);

Route::get('/view_proposition',[TuteurController::class,'view_proposition']);

Route::get('/add_seance',[TuteurController::class,'add_seance']);

Route::post('/add_seanceADD',[TuteurController::class,'add_seanceADD']);

Route::get('/tuteurviewSeance',[TuteurController::class,'tuteurviewSeance']);

Route::get('/SeanceEffectue/{id}',[TuteurController::class,'SeanceEffectue']);



Route::get('/viewListerEtudiant',[AdminController::class,'viewListerEtudiant']);

Route::get('/validerTuteur/{id}',[AdminController::class,'validerTuteur']);

Route::get('/supprimerEtudiant/{id}',[AdminController::class,'supprimerEtudiant']);

Route::get('/viewListerTuteur',[AdminController::class,'viewListerTuteur']);

Route::get('/viewListerSeance',[AdminController::class,'viewListerSeance']);

Route::get('/seanceValide/{id}',[AdminController::class,'seanceValide']);

Route::get('/viewListerModule',[AdminController::class,'viewListerModule']);

Route::get('/viewAddModule',[AdminController::class,'viewAddModule']);

Route::post('/addModule',[AdminController::class,'addModule']);

Route::get('/supprimerModule/{id}',[AdminController::class,'supprimerModule']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
