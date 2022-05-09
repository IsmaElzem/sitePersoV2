<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompetencesController;
use App\Http\Controllers\ExperiencesProfessionnellesController;
use App\Http\Controllers\InformationsPersonnellesController;
use App\Http\Controllers\ParcoursUniversitaireController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\SiteController;
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

//////////////////////////////  Page d'accueil //////////////////////////////
Route::get('/', [SiteController::class, 'index'])->name('accueil');

////////////////////////////// Page admin //////////////////////////////
Route::middleware(['admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        /* Permet d'accèder à la page d'accueil de la partie admin */
        Route::get('/', [AdminController::class, 'index'])->name('admin');

        /////// Informations personnelles ///////
        Route::resource('informations-personnelles', InformationsPersonnellesController::class);

        /////// Expériences professionnelles ///////
        Route::resource('experiences-professionnelles', ExperiencesProfessionnellesController::class);

        /////// Parcours universitaires ///////
        Route::resource('parcours-universitaire', ParcoursUniversitaireController::class);

        /////// Compétences ///////
        Route::resource('competences', CompetencesController::class);

        /////// Projets réalisés ///////
        Route::resource('projets', ProjetController::class);

    });
});
