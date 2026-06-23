<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'title',
        'artist_id',
        'release_year',
        'description',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
