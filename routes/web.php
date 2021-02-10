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
                                                /*Controleur Navigation*/
Route::get('sio',[
    'as'=>'chemin_sio',
    'uses'=>'App\Http\Controllers\navigationPage@sio'
]);

Route::get('listeProjets',[
    'as'=>'chemin_listeProjets',
    'uses'=>'App\Http\Controllers\navigationPage@listeProjets'
]);

Route::get('cv',[
    'as'=>'chemin_cv',
    'uses'=>'App\Http\Controllers\navigationPage@cv'
]);



                                                /*Controleur Connexion*/
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
                                                /*Controleur Gestion*/
Route::get('editerCV',[
    'as'=>'chemin_editerCV',
    'uses'=>'App\Http\Controllers\gestion@afficherEditerCV'
]);
//Scolarite
Route::get('majScolarite',[
    'as'=>'chemin_majScolarite',
    'uses'=>'App\Http\Controllers\gestion@afficherMajScolarite'
]);

Route::get('validerMajScolarite',[
    'as'=>'chemin_validerMajScolarite',
    'uses'=>'App\Http\Controllers\gestion@validerMajScolarite'
]);

Route::get('ajtScolarite',[
    'as'=>'chemin_ajtScolarite',
    'uses'=>'App\Http\Controllers\gestion@afficherAjtScolarite'
]);

Route::get('validerAjtScolarite',[
    'as'=>'chemin_validerAjtScolarite',
    'uses'=>'App\Http\Controllers\gestion@validerAjtScolarite'
]);

//Competence

Route::get('majCompetence',[
    'as'=>'chemin_majCompetence',
    'uses'=>'App\Http\Controllers\gestion@afficherMajCompetence'
]);
Route::get('validerMajCompetence',[
    'as'=>'chemin_validerMajCompetence',
    'uses'=>'App\Http\Controllers\gestion@validerMajCompetence'
]);
Route::get('ajtCompetence',[
    'as'=>'chemin_ajtCompetence',
    'uses'=>'App\Http\Controllers\gestion@afficherAjtCompetence'
]);

Route::get('validerAjtCompetence',[
    'as'=>'chemin_validerAjtCompetence',
    'uses'=>'App\Http\Controllers\gestion@validerAjtCompetence'
]);

//Experience

Route::get('majExperience',[
    'as'=>'chemin_majExperience',
    'uses'=>'App\Http\Controllers\gestion@afficherMajExperience'
]);

Route::get('validerMajExperience',[
    'as'=>'chemin_validerMajExperience',
    'uses'=>'App\Http\Controllers\gestion@validerMajExperience'
]);

Route::get('ajtExperience',[
    'as'=>'chemin_ajtExperience',
    'uses'=>'App\Http\Controllers\gestion@afficherAjtExperience'
]);
Route::get('validerAjtExperience',[
    'as'=>'chemin_validerAjtExperience',
    'uses'=>'App\Http\Controllers\gestion@validerAjtExperience'
]);


