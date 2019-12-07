<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobpost extends Model
{
    protected $guarded = [];
    public function applications(){
        return $this->belongsToMany(Application::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
