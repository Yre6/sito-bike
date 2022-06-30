<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{

    public function getRouteKeyName(){ return 'slug'; }

    public function valley(){
        return $this->belongsTo('App\Models\Valley');
    }

    public function environment(){
        return $this->belongsTo('App\Models\Environment');
    }
}
