<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\NotationController;
use App\Http\Controllers\AffichageController;
use App\Http\Controllers\ClassementController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/


route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
route::get('post',[HomeController::class, 'post']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/universites/liste', [UniversiteController::class, 'index'])->name('universites.liste');
Route::get('/universites/create', [UniversiteController::class, 'create'])->name('universites.create');
Route::post('/universites', [UniversiteController::class, 'store'])->name('universites.store');

Route::get('/universites/{id}/edit', [UniversiteController::class, 'edit'])->name('universites.edit');
Route::put('/universites/{universite}', [UniversiteController::class, 'update'])->name('universites.update');
Route::delete('/universites/{universite}', [UniversiteController::class, 'delete'])->name('universites.delete');

Route::get('/utilisateurs', [UtilisateurController::class, 'index'])->name('utilisateurs.index');
Route::get('/utilisateurs/{utilisateur}/edit', [UtilisateurController::class, 'edit'])->name('utilisateurs.edit'); // Route pour afficher le formulaire de modification de l'utilisateur
Route::put('/utilisateurs/{utilisateur}', [UtilisateurController::class, 'update'])->name('utilisateurs.update'); // Route pour mettre à jour l'utilisateur

Route::delete('/utilisateurs/{utilisateur}', [UtilisateurController::class, 'destroy'])->name('utilisateurs.destroy'); // Route pour supprimer l'utilisateur
Route::get('/utilisateurs/{utilisateur}/edit', [UtilisateurController::class, 'edit'])->name('utilisateurs.edit');

Route::get('/universites', [UniversiteController::class, 'afficherListe'])->name('universites.universites_liste');

Route::get('/notations/create', [NotationController::class, 'create'])->name('notations.create');
Route::post('/notations', [NotationController::class, 'store'])->name('notations.store');
Route::get('/notations', [NotationController::class, 'index'])->name('notations.index');
Route::get('/notations/index', [NotationController::class, 'index'])->name('notations.index');
Route::delete('/notations/{notation}', [NotationController::class, 'destroy'])->name('notations.destroy');


Route::get('/affichage', [AffichageController::class, 'index'])->name('affichage');

Route::get('/notations/sortByCriteria', 'NotationController@sortByCriteria')->name('notations.sortByCriteria');

Route::get('/classement', [ClassementController::class, 'index'])->name('classement.index');





require __DIR__.'/auth.php';
