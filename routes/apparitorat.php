<?php

use App\Http\Controllers\Apparitorat\ApparitoratController;
use Illuminate\Support\Facades\Route;

Route::prefix('apparitorat')
    ->name('apparitorat.')
    ->controller(ApparitoratController::class)
    ->group(function () {
        Route::get('/', 'dashboard')->name('dashboard');
        Route::get('/dossiers', 'dossiers')->name('dossiers');
        Route::post('/dossiers/{id}/valider', 'valider')->name('dossiers.valider');
        Route::post('/dossiers/{id}/rejeter', 'rejeter')->name('dossiers.rejeter');
    });
