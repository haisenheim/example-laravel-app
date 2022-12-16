<?php

use App\Models\Etudiant;
use Illuminate\Support\Facades\Route;

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

Route::get('/accueil', function () {
    return view('accueil');
});

/* Route::get('/etudiants',function(){
    //Etudiant::create(['last_name'=>'NGOMA','first_name'=>'Albert']);
    $etudiants = Etudiant::all()->where('id','>',1);
   // dd($etudiants);
    return view('Etudiants/index')->with(compact('etudiants'));
}); */

Route::get('/etudiants','App\Http\Controllers\EtudiantController@index');
Route::post('/etudiants','App\Http\Controllers\EtudiantController@store');

Route::get('/etudiants/create','App\Http\Controllers\EtudiantController@create');

Route::get('/filieres',function(){
    return view('Filieres/index');
});

Route::get('/home', function () {
    return view('home');
});
