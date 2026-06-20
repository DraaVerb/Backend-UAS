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

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}