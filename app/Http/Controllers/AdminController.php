<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Disease;

class AdminController extends Controller
{
    public function doctors(){

        $doctors = Doctor::get();

        return view('admin.doctors')->with(['doctors' => $doctors]);
    }
    public function hospitals(){

        $hospitals = Hospital::get();

        return view('admin.hospitals')->with(['hospitals' => $hospitals]);
    }
    public function diseases(){

        $diseases = Disease::get();

        return view('admin.diseases')->with(['diseases' => $diseases]);
    }
   

   
}