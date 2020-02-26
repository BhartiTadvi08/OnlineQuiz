<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
     protected $fillable = [
        'comment',
    ];

    public function getCommentAttribute($value)
    {
        return ucfirst($value);
    }

    public function setCommentAttribute($value)
    {
        $this->attributes['comment'] = strtolower($value);
    }
    
}
