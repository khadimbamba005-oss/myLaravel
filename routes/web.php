<?php

use App\Http\Controllers\LivreController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EmpruntController ;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/',[WelcomeController::class,'welcome'])->name('welcome');

Route::get('/livres' , [LivreController::class, 'index'])->name('livre.liste');
Route::get('/livres/create', [LivreController::class, 'create'])->name('livre.create');
Route::post('/livres', [LivreController::class , 'store'])->name('livre.store');
Route::get('livres/show/{livre}' , [LivreController::class, 'show'])->name('livre.show');
Route::get('livres/edit/{livre}' , [LivreController::class , 'edit'])->name('livre.edit');
Route::put('livres/edit/{livre}' , [LivreController::class , 'update'])->name('livre.update');
Route::delete('livres/delete/{livre}', [LivreController::class, 'delete'])->name('livre.delete');

// les routes pour etudiants
Route::get('/etudiants', [EtudiantController::class , 'index'])->name('etudiant.index');
Route::get('etudiants/create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiants', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('etudiants/show/{etudiant}',[EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('/etudiants/edit/{etudiant]',[EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::get('/etudiants/edit/{etudiant}',[EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('etudiants/{etudiant}',[EtudiantController::class, 'delete'])->name('etudiant.delete');

// pour les emprunts

Route::get('/emprunts',[EmpruntController::class,'index'])->name('emprunt.index');
Route::post('/emprunts',[EmpruntController::class,'store'])->name('emprunt.store');
Route::get('emprunts/create',[EmpruntController::class,'create'])->name('emprunt.create');
Route::get('emprunts/show/{emprunt}',[EmpruntController::class,'show'])->name('emprunt.show');
Route::get('emprunts/edit/{emprunt}',[EmpruntController::class,'edit'])->name('emprunt.edit');
Route::put('emprunts/{emprunt}',[EmpruntController::class,'update'])->name('emprunt.update');
Route::delete('emprunts/{emprunt}',[EmpruntController::class,'destroy'])->name('emprunt.destroy');
// Route pour generer des fichiers pdf
Route::get('emprunts/liste', [EmpruntController::class , 'genererPdf'])->name('liste');
Route::get('emprunts/envoi_email',
    function()  {

        Mail::raw('Envoi email' , function($message)
        {
            $message->to('khadimbamba005@gmail.com')
                    ->subject('Rappel de retour du livre emprunte');
        });
        return "Email envoye";

});

Route::get('/login', [LoginController::class , 'showLogin'])->name('showLogin');
Route::get('/login' , [LoginController::class , 'login'])->name('login');
Route::get('/login' , [LoginController::class , 'logout'])->name('logout');
