<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $guarded = [];
    public function jobposts(){
        return $this->hasMany(Jobpost::class);
    }
}
