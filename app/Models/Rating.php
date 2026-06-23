<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'song_id',

        'rating'

        'rater_name',
        'score',
        'review',

    ];

    public function song()
    {
        return $this->belongsTo(Song::class);
    }

}


