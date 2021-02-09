<?php
use App\Http\Controllers\navigationPage;
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
    return view('accueil');
});

Route::get('sio',[
    'as'=>'chemin_sio',
    'uses'=>'App\Http\Controllers\navigationPage@sio'
]);

Route::get('listeProjets',[
    'as'=>'chemin_listeProjets',
    'uses'=>'App\Http\Controllers\navigationPage@listeProjets'
]);

Route::get('connexion',[
    'as'=>'chemin_connexion',
    'uses'=>'App\Http\Controllers\connexion@afficherConnexion'
]);

Route::post('validerConnexion',[
    'as'=>'chemin_validerConnexion',
    'uses'=>'App\Http\Controllers\connexion@validerConnexion'
]);

Route::get('inscription',[
    'as'=>'chemin_inscription',
    'uses'=>'App\Http\Controllers\connexion@afficherInscrip'
]);

Route::post('validerInscription',[
    'as'=>'chemin_validerInscription',
    'uses'=>'App\Http\Controllers\connexion@validerInscription'
]);

Route::get('deconnexion',[
    'as'=>'chemin_deconnexion',
    'uses'=>'App\Http\Controllers\connexion@deconnexion'
]);

