<?php

use App\Http\Controllers\AdminController;
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
    Route::group(['prefix' => 'admin'], function() {
        /* Permet d'accèder à la page d'accueil de la partie admin */
        Route::get('/', [AdminController::class, 'index'])->name('admin');
    });
                /////// Informations personnelles ///////
    Route::group(['prefix' => 'informations-personnelles'], function() {
        /* Permet de consulter mes informations personnelles (à propos / pq ce site / quelques détails) */
        Route::get('/', [AdminController::class, 'consulterInfosPersos'])->name('consulter.infos.persos');
        /* Permet d'ajouter une informations personnelles (à propos / pq ce site / quelques détails) */
        Route::get('/ajouter', [AdminController::class, 'ajouterInfosPersos'])->name('ajouter.infos.persos');
        /* Ajoute une information personnelle (à propos / pq ce site / quelques détails) */
        Route::get('/ajout', [AdminController::class, 'ajoutInfosPersos'])->name('ajout.infos.persos');
        /* Permet d'accéder à la page modification de mes informations personnelles (à propos / pq ce site / quelques détails) */
        Route::get('/modifier/{id}', [AdminController::class, 'modifierInfosPersos'])->name('modifier.infos.persos');
        /* Permet de modifier mes informations personnelles (à propos / pq ce site / quelques détails */
        Route::post('/modification/{id}', [AdminController::class, 'modificationInfosPersos'])->name('modification.infos.persos');
        /* Permet de supprimer mes informations personnelles (à propos / pq ce site / quelques détails */
        Route::delete('/supprimer/{id}', [AdminController::class, 'supprimerInfosPersos'])->name('supprimer.infos.persos');
    });

                /////// Expériences professionnelles ///////
    /* Permet de consulter mes expériences professionnelles  */
    Route::group(['prefix' => 'experiences-professionnelles'], function() {
        Route::get('/', [AdminController::class, 'consulterExperiencesPros'])->name('consulter.exp.pros');
        /* Permet d'acceder à la page de modification de mes expériences professionnelles  */
        Route::get('/modifier/{id}', [AdminController::class, 'modifierExperiencesPros'])->name('modifier.exp.pros');
        /* Permet d'ajouter une Expérience professionnelle */
        Route::get('/ajouter', [AdminController::class, 'ajouterExperiencePro'])->name('ajouter.exp.pro');
        /* Ajoute une expérience professionnelle */
        Route::get('/ajout', [AdminController::class, 'ajoutExperiencePro'])->name('ajout.exp.pro');
        /* Permet de modifier mes expériences professionnelles  */
        Route::post('/modifications/{id}', [AdminController::class, 'modificationExperiencesPros'])->name('modification.exp.pros');
        /* Permet de supprimer mes expériences professionnelles  */
        Route::delete('/supprimer/{id}', [AdminController::class, 'supprimerExperiencePros'])->name('supprimer.exp.pros');
    });

        /////// Parcours universitaires ///////
    /* Permet de consulter mon parcours universitaire  */
    Route::group(['prefix' => 'parcours-universitaire'], function() {
        Route::get('/', [AdminController::class, 'consulterParcoursUniv'])->name('consulter.parcours.univ');
        /* Permet d'acceder à la page de modification de mon parcours universitaire  */
        Route::get('/modifier/{id}', [AdminController::class, 'modifierParcoursUniv'])->name('modifier.parcours.univ');
        /* Permet d'ajouter un parcours universitaire */
        Route::get('/ajouter', [AdminController::class, 'ajouterParcoursUniv'])->name('ajouter.parcours.univ');
        /* Ajoute un parcours universitaire */
        Route::get('/ajout', [AdminController::class, 'ajoutParcoursUniv'])->name('ajout.parcours.univ');
        /* Permet de modifier mon parcours universitaire  */
        Route::post('/modifications/{id}', [AdminController::class, 'modificationParcoursUniv'])->name('modification.parcours.univ');
        /* Permet de supprimer un parcours universitaire  */
        Route::delete('/supprimer/{id}', [AdminController::class, 'supprimerParcoursUniv'])->name('supprimer.parcours.univ');
    });

        /////// Compétences ///////
    /* Permet de consulter mes compétences  */
    Route::group(['prefix' => 'competences'], function() {
        Route::get('/', [AdminController::class, 'consulterCompetences'])->name('consulter.competence');
        /* Permet d'acceder à la page de modification de mes compétences  */
        Route::get('/modifier/{id}', [AdminController::class, 'modifierCompetence'])->name('modifier.competence');
        /* Permet d'ajouter une compétence */
        Route::get('/ajouter', [AdminController::class, 'ajouterCompetence'])->name('ajouter.competence');
        /* Ajoute une compétence */
        Route::get('/ajout', [AdminController::class, 'ajoutCompetence'])->name('ajout.competence');
        /* Permet de modifier mes compétences  */
        Route::post('/modifications/{id}', [AdminController::class, 'modificationCompetence'])->name('modification.competence');
        /* Permet de supprimer une compétence  */
        Route::delete('/supprimer/{id}', [AdminController::class, 'supprimerCompetence'])->name('supprimer.competence');
    });

    /////// Projets réalisés ///////
    /* Permet de consulter mes projets  */
    Route::group(['prefix' => 'projets'], function() {
        Route::get('/', [AdminController::class, 'consulterProjet'])->name('consulter.projet');
        /* Permet d'acceder à la page de modification de mes projets  */
        Route::get('/modifier/{id}', [AdminController::class, 'modifierProjet'])->name('modifier.projet');
        /* Permet d'ajouter un projet */
        Route::get('/ajouter', [AdminController::class, 'ajouterProjet'])->name('ajouter.projet');
        /* Ajoute un projet */
        Route::get('/ajout', [AdminController::class, 'ajoutProjet'])->name('ajout.projet');
        /* Permet de modifier mes projets  */
        Route::post('/modifications/{id}', [AdminController::class, 'modificationProjet'])->name('modification.projet');
        /* Permet de supprimer un projet  */
        Route::delete('/supprimer/{id}', [AdminController::class, 'supprimerProjet'])->name('supprimer.projet');
    });

});
