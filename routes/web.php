<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ArtistController;

Route::get('/', function () {
    return view('welcome');
});

// =====================
// Song Routes
// =====================
Route::get('/songs', [SongController::class, 'index']);
Route::get('/songs/create', [SongController::class, 'create']);
Route::post('/songs', [SongController::class, 'store']);
Route::get('/songs/{id}', [SongController::class, 'show']);

// =====================
// Search Routes
// =====================
Route::get('/search', [SearchController::class, 'index']);
Route::get('/search/result', [SearchController::class, 'result']);

// =====================
// Genre Routes
// =====================
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{id}', [GenreController::class, 'show']);

// =====================
// Artist Routes
// =====================
Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/create', [ArtistController::class, 'create']);
Route::post('/artists', [ArtistController::class, 'store']);
Route::get('/artists/{id}', [ArtistController::class, 'show']);
Route::get('/artists/{id}/edit', [ArtistController::class, 'edit']);
Route::put('/artists/{id}', [ArtistController::class, 'update']);
Route::delete('/artists/{id}', [ArtistController::class, 'destroy']);