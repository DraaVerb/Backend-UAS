<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title',
        'artist',
        'album',
        'duration',
        'genre_id'
    ];

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function playlists()
    {
        return $this->belongsToMany(Playlist::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}