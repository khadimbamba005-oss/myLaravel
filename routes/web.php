<?php
use App\Http\Controllers\LivreController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;
Route::get('/' , function()
{
    return view('layout.template');
});

Route::get('/livres' , [LivreController::class, 'index'])->name('livre.liste');
Route::get('/livres/create', [LivreController::class, 'create'])->name('livre.create');
Route::post('/livres', [LivreController::class , 'store'])->name('livre.store');
Route::get('livres/show/{livre}' , [LivreController::class, 'show'])->name('livre.show');
Route::get('livres/edit/{livre}' , [LivreController::class , 'edit'])->name('livre.edit');
Route::put('livres/edit/{livre}' , [LivreController::class , 'update'])->name('livre.update');
Route::delete('livres/delete/{livre}', [LivreController::class, 'delete'])->name('livre.delete');
Route::get('/etudiants', [EtudiantController::class , 'index'])->name('etudiant.index');
Route::get('etudiants/create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiants', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('etudiants/show/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');
// Route::get('/etudiants/edit/{etudiant]', [EtudiantController::class, 'edit'])->name('etudiant.edit');
// Route::get('/etudiants/edit/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
// Route::delete('etudiants/delete/{livre}', [EtudiantController::class, 'delete'])->name('etudiant.delete');


