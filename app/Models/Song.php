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
}