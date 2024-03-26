<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TrajetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
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

Route::get('/auth/google/redirect', [GoogleController::class ,'redirect']);    
Route::get('/auth/google/callback-url',[GoogleController::class,'callback']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Apropos', function(){
    return view("Apropos");
});

Route::get('/creationCompte', function(){
    return view("creationCompte");
});

Route::get('/motDePasseOublie', function(){
    return view("motDePasseOublie");
});

Route::get('/CreationCompteClient', function(){
    return view("CreationCompteClient");
});

Route::get('/CreationCompteChauffeur', function(){
    return view("CreationCompteChauffeur");
});

Route::get('/accueiluser', [RoleController::class, 'lien']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/accueil-admin', function () {
        return view('homeadmin');
    })->middleware(['auth', 'verified'])->name('accueil-admin');
    Route::post('/trajets', [TrajetController::class, 'store'])->name('trajets.store');
    Route::get('/trajet', [TrajetController::class, 'index'])->name('trajets.index');
    Route::get('/passager', [Controller::class, 'selectpassager'])->name('passagers.index');
    Route::get('/chauffeur', [Controller::class, 'selectchauffeur'])->name('chauffeurs.index');
    Route::get('/trajet/{id}', [TrajetController::class, 'destroy']);
    Route::get('/trajet/edit/{id}', [TrajetController::class, 'create']);
    Route::get('/passager/{id}', [Controller::class, 'destroypassager']);
    Route::get('/chauffeur/{id}', [Controller::class, 'destroychauffeur']);
    Route::get('/listeCommande', [CommandeController::class, 'commandespassager'])->name('listeCommande');
});

Route::middleware(['auth', 'role:passager'])->group(function () {
    Route::get('/accueil-passager', function () {
        return view('homepassager');
    })->middleware(['auth', 'verified'])->name('accueil-passager');
    Route::post('/commandes', [CommandeController::class, 'store'])->name('commandes.store');
    Route::get('/accueil-passager', [CommandeController::class, 'commandespasser'])->name('passagertrajets.index');
});

Route::middleware(['auth', 'role:chauffeur'])->group(function () {
    Route::get('/accueil-chauffeur', function () {
        return view('homechauffeur');
    })->middleware(['auth', 'verified'])->name('accueil-chauffeur');
    Route::get('/accueil-chauffeur', [CommandeController::class, 'index'])->name('commandeschauffeurs');
    Route::post('/commandes/{id}', [CommandeController::class, 'update'])->name('commandes.update');
    Route::post('/Mesvihiculess', [CommandeController::class, 'Mesvihicule'])->name('Mesvihiculess');
    Route::get('/Mesvihicules', [CommandeController::class, 'Mesvihicules'])->name('Mesvihicules');

});

require __DIR__.'/auth.php';
