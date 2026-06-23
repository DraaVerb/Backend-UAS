<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $fillable = [
        'name',

        'description'
    ];

        'description',
    ];

    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }

}
