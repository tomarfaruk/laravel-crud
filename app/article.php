<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //
    protected $guarded = [];
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
}
