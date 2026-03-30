<?php
use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;
Route::get('/' , function()
{
    return view('layout.template');
});

Route::get('/livres' , [LivreController::class, 'index'])->name('livre.liste');
Route::get('/livres/create', [LivreController::class, 'create'])->name('livre.create');
Route::post('livres/store', [LivreController::class , 'store'])->name('livre.store');
Route::get('livres/show/{livre}' , [LivreController::class, 'show'])->name('livre.show');
Route::get('livres/edit/{livre}' , [LivreController::class , 'edit'])->name('livre.edit');
Route::put('livres/edit/{livre}' , [LivreController::class , 'update'])->name('livre.update');
