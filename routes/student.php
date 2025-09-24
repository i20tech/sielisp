<?php

use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;

Route::prefix('student')
    ->name('student.')
    ->controller(StudentController::class)
    ->group(function () {
        Route::get('/', 'dashboard')->name('dashboard');
        Route::get('/inscription', 'create')->name('inscription.create');
        Route::post('/inscription', 'store')->name('inscription.store');
        Route::get('/dossier/{id}', 'dossier')->name('dossier');
        Route::get('/paiement/{id}', 'paiement')->name('paiement');
    });
