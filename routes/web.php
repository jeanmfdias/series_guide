<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

//Auth::routes();

Route::prefix('series')->group(function () {
    Route::get('/', [SeriesController::class, 'index'])
        ->name('series.index');
    Route::get('/create', [SeriesController::class, 'create'])
        ->name('series.create');
});

