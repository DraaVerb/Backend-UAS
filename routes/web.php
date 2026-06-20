<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/songs', [SongController::class, 'index']);
Route::get('/songs/create', [SongController::class, 'create']);
Route::post('/songs', [SongController::class, 'store']);
Route::get('/songs/{id}', [SongController::class, 'show']);

// Search
Route::get('/search', [SearchController::class, 'index']);
Route::get('/search/result', [SearchController::class, 'result']);

// Genre
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{id}', [GenreController::class, 'show']);