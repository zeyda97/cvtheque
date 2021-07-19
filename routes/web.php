<?php

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


Auth::routes();
Route::middleware(['auth', 'admin'])->group(function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('roles', App\Http\Controllers\RoleController::class);

Route::resource('genres', App\Http\Controllers\GenreController::class);

Route::resource('nationalites', App\Http\Controllers\NationaliteController::class);

Route::resource('situationMatrimoniales', App\Http\Controllers\SituationMatrimonialeController::class);

Route::resource('regionResidences', App\Http\Controllers\RegionResidenceController::class);

Route::resource('departementResidences', App\Http\Controllers\DepartementResidenceController::class);

Route::resource('communeResidences', App\Http\Controllers\CommuneResidenceController::class);

Route::resource('statuts', App\Http\Controllers\StatutController::class);

Route::resource('typeMetiers', App\Http\Controllers\TypeMetierController::class);

Route::resource('typeCandidatures', App\Http\Controllers\TypeCandidatureController::class);

Route::resource('adresses', App\Http\Controllers\AdresseController::class);

Route::resource('langues', App\Http\Controllers\LangueController::class);

Route::resource('typeExperiences', App\Http\Controllers\TypeExperienceController::class);

Route::resource('postes', App\Http\Controllers\PosteController::class);

Route::resource('justificatifs', App\Http\Controllers\JustificatifController::class);

Route::resource('competences', App\Http\Controllers\CompetenceController::class);

Route::resource('formations', App\Http\Controllers\FormationController::class);

Route::resource('experiences', App\Http\Controllers\ExperienceController::class);

Route::resource('niveauxes', App\Http\Controllers\NiveauxController::class);

Route::resource('typeCompetences', App\Http\Controllers\TypeCompetenceController::class);

Route::resource('motifContrats', App\Http\Controllers\MotifContratController::class);

Route::resource('objetContrats', App\Http\Controllers\ObjetContratController::class);

Route::resource('typeJustificatifs', App\Http\Controllers\TypeJustificatifController::class);

Route::resource('fiches', App\Http\Controllers\FicheController::class);

Route::resource('users', App\Http\Controllers\UserController::class);


});

Route::resource('candidats', App\Http\Controllers\CandidatController::class);


Route::middleware(['auth'])->group(function () {

Route::get('/deposer-candidatures-profil', [App\Http\Controllers\WelcomeController::class, 'deposercandidaturesprofil'])->name('deposercandidaturesprofil');
Route::post('/deposer-candidatures-profil', [App\Http\Controllers\WelcomeController::class, 'deposercandidaturesprofilpost'])->name('deposercandidaturesprofilpost');


Route::get('/deposer-candidatures-formation', [App\Http\Controllers\WelcomeController::class, 'deposercandidaturesformation'])->name('deposercandidaturesformation');
Route::post('/deposer-candidatures-formation', [App\Http\Controllers\WelcomeController::class, 'deposercandidaturesformationpost'])->name('deposercandidaturesformationpost');

Route::get('/deposer-candidatures-competences', [App\Http\Controllers\WelcomeController::class, 'deposercandidaturescompetences'])->name('deposercandidaturescompetences');
Route::post('/deposer-candidatures-competences', [App\Http\Controllers\WelcomeController::class, 'deposercandidaturescompetencespost'])->name('deposercandidaturescompetencespost');

Route::get('/deposer-candidatures-experience', [App\Http\Controllers\WelcomeController::class, 'deposercandidaturesexperience'])->name('deposercandidaturesexperience');
Route::post('/deposer-candidatures-experience', [App\Http\Controllers\WelcomeController::class, 'deposercandidaturesexperiencepost'])->name('deposercandidaturesexperiencepost');

Route::get('/deposer-candidatures-langues', [App\Http\Controllers\WelcomeController::class, 'deposercandidatureslangues'])->name('deposercandidatureslangues');
Route::post('/deposer-candidatures-langues', [App\Http\Controllers\WelcomeController::class, 'deposercandidatureslanguespost'])->name('deposercandidatureslanguespost');

Route::get('/deposer-candidatures-pieces', [App\Http\Controllers\WelcomeController::class, 'deposercandidaturespieces'])->name('deposercandidaturespieces');
Route::post('/deposer-candidatures-pieces', [App\Http\Controllers\WelcomeController::class, 'deposercandidaturespiecespost'])->name('deposercandidaturespiecespost');

Route::get('/deposer-candidatures-terminer', [App\Http\Controllers\WelcomeController::class, 'terminerdepot'])->name('terminerdepot');
});
