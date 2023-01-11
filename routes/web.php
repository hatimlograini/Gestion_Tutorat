<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


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
Route::get('/home', [AjoutTuteur::class,'redirect']);

Route::get('/view_seance',[HomeController::class,'view_seance']);

Route::get('/inscrire_seance/{id}',[HomeController::class,'inscrire']);








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/courses/create', 'CourseController@create');
    Route::post('/courses', 'CourseController@store');
    Route::get('/courses', 'CourseController@index');
    Route::get('/courses/{id}/edit', 'CourseController@edit');
    Route::patch('/courses/{id}', 'CourseController@update');
    Route::delete('/courses/{id}', 'CourseController@destroy');    
});
