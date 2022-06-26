<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function valley(){
        return $this->belongsTo('App\Models\Valley');
    }
}
