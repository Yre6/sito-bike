<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    public function tours(){
        return $this->hasMany('App\Models\Tour');
    }
}
