<?php
use Illuminate\Support\Facades\Route;
use Mucahittopcu\Filmapi\Controllers\MoviesDatabaseController;
use Mucahittopcu\Filmapi\Controllers\AdvancedMovieSearchController;
use MucahitTopcu\Filmapi\Controllers\MoviesConcurrencyController;


Route::prefix('api')->group(function () {
    Route::get('/movies/moviesdatabase', [MoviesDatabaseController::class, 'search']);
    Route::get('/movies/advanced-movie-search', [AdvancedMovieSearchController::class, 'search']);
    Route::get('/movies', [MoviesConcurrencyController::class, 'processConcurrentRequests']);
});

