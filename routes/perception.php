<?php

use App\Http\Controllers\Perception\PerceptionController;
use Illuminate\Support\Facades\Route;

Route::prefix('perception')
    ->name('perception.')
    ->controller(PerceptionController::class)
    ->group(function () {
        Route::get('/', 'dashboard')->name('dashboard');
        Route::get('/paiements', 'paiements')->name('paiements');
        Route::post('/paiements/{id}/enregistrer', 'enregistrer')->name('paiements.enregistrer');
        Route::get('/recu/{id}', 'recu')->name('recu');
    });
