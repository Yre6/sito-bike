<?php

namespace App\Http\Controllers;
use App\Models\Valley;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function valleys(){
        $valleys = Valley::all();

        //dd($valleys);

        return view('guest.valleys', compact('valleys'));
    }
}
