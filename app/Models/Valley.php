<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valley extends Model
{
    public function getRouteKeyName(){ return 'slug'; }

    public function tours(){
        return $this->hasMany('App\Models\Tour');
    }

   
}
