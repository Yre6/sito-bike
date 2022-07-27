<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['name','distance','duration','altitude_delta','description','link_gps','map_image','altimetry_image','slug','valley_id','environment_id'];
    
    public function getRouteKeyName(){ return 'slug'; }

    public function valley(){
        return $this->belongsTo('App\Models\Valley');
    }

    public function environment(){
        return $this->belongsTo('App\Models\Environment');
    }
}
