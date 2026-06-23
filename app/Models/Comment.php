<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'song_id',

        'username',
        'comment'

        'commenter_name',
        'content',

    ];

    public function song()
    {
        return $this->belongsTo(Song::class);
    }

}



