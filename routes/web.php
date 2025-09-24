<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// ✅ Routes publiques
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');             // Accueil
    Route::get('/apropos', 'about')->name('about');     // À propos
    Route::get('/section/{id}', 'section')->name('section.show'); // Détails Section
});

// ✅ Inclusion des autres fichiers de routage
require __DIR__.'/admin.php';
require __DIR__.'/apparitorat.php';
require __DIR__.'/perception.php';
require __DIR__.'/student.php';
