<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hospital;

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

   
}
