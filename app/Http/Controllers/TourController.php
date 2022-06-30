<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Valley;

class TourController extends Controller
{
    public function valleys(){
        $valleys = Valley::with(['tours']);

        return view('guest.valleys', compact('valleys'));

       // dd(Valley::find(1)->tours()->count());
    }
}
