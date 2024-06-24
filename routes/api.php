<?php
use Illuminate\Support\Facades\Route;
use MucahitTopcu\Filmapi\Controllers\MoviesDatabaseController;
use MucahitTopcu\Filmapi\Controllers\AdvancedMovieSearchController;


Route::prefix('api')->group(function () {
    Route::get('/moviesdatabase', [MoviesDatabaseController::class, 'searchMovies']);
    Route::get('/advanced-movie-search', [AdvancedMovieSearchController::class, 'search']);
});