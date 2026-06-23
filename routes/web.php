<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\FavoriteController;

Route::get('/', function () {
    return view('welcome');
});


// Song Routes
Route::get('/songs', [SongController::class, 'index']);
Route::get('/songs/create', [SongController::class, 'create']);
Route::post('/songs', [SongController::class, 'store']);
Route::get('/songs/{id}', [SongController::class, 'show']);
Route::get('/search', [SearchController::class, 'index']);
Route::get('/search/result', [SearchController::class, 'result']);
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

// Playlist Routes
Route::get('/playlists', [PlaylistController::class, 'index']);
Route::get('/playlists/create', [PlaylistController::class, 'create']);
Route::post('/playlists', [PlaylistController::class, 'store']);
Route::get('/playlists/{id}', [PlaylistController::class, 'show']);
Route::get('/playlists/{id}/edit', [PlaylistController::class, 'edit']);
Route::put('/playlists/{id}', [PlaylistController::class, 'update']);
Route::delete('/playlists/{id}', [PlaylistController::class, 'destroy']);

// Favorite Routes
Route::get('/favorites', [FavoriteController::class,'index']);
Route::post('/favorites', [FavoriteController::class,'store']);
Route::get('/favorites/{id}', [FavoriteController::class,'show']);
Route::delete('/favorites/{id}', [FavoriteController::class,'destroy']);