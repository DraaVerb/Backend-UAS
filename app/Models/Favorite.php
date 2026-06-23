<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'song_id'
    ];

    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
