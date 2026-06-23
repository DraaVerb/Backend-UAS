<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RatingController;

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

// =====================
// Album Routes
// =====================
Route::get('/albums', [AlbumController::class, 'index']);
Route::get('/albums/create', [AlbumController::class, 'create']);
Route::post('/albums', [AlbumController::class, 'store']);
Route::get('/albums/{id}', [AlbumController::class, 'show']);
Route::get('/albums/{id}/edit', [AlbumController::class, 'edit']);
Route::put('/albums/{id}', [AlbumController::class, 'update']);
Route::delete('/albums/{id}', [AlbumController::class, 'destroy']);

// =====================
// Playlist Routes
// =====================
Route::get('/playlists', [PlaylistController::class, 'index']);
Route::get('/playlists/create', [PlaylistController::class, 'create']);
Route::post('/playlists', [PlaylistController::class, 'store']);
Route::get('/playlists/{id}', [PlaylistController::class, 'show']);
Route::get('/playlists/{id}/edit', [PlaylistController::class, 'edit']);
Route::put('/playlists/{id}', [PlaylistController::class, 'update']);
Route::delete('/playlists/{id}', [PlaylistController::class, 'destroy']);

// =====================
// Favorite Routes
// =====================
Route::get('/favorites', [FavoriteController::class, 'index']);
Route::post('/favorites', [FavoriteController::class, 'store']);
Route::get('/favorites/{id}', [FavoriteController::class, 'show']);
Route::delete('/favorites/{id}', [FavoriteController::class, 'destroy']);

// =====================
// Comment Routes
// =====================
Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);
Route::post('/comments', [CommentController::class, 'store']);
Route::get('/comments/{id}', [CommentController::class, 'show']);
Route::delete('/comments/{id}', [CommentController::class, 'destroy']);

// =====================
// Rating Routes
// =====================
Route::get('/ratings', [RatingController::class, 'index']);
Route::get('/ratings/create', [RatingController::class, 'create']);
Route::post('/ratings', [RatingController::class, 'store']);
Route::get('/ratings/{id}', [RatingController::class, 'show']);
Route::delete('/ratings/{id}', [RatingController::class, 'destroy']);
