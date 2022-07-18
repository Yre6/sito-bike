<?php

namespace App\Http\Controllers;
use App\Models\Valley;
use App\Models\Tour;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function valleys(){
        $valleys = Valley::all();

        //dd($valleys);

        return view('guest.valleys', compact('valleys'));
    }

    public function index(Valley $valley){

        return view('guest.index', compact('valley'));
    }

   /*  public function show(){


        return view('guest.show');


    } */
}
