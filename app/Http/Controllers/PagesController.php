<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hospital;


class PagesController extends Controller
{
    public function doctorsPage(){

        $doctors = Doctor::get();
        return view('user.doctors')->with(['doctors' => $doctors]);

    }
    public function hospitalsPage(){

        $hospitals = Hospital::get();
        return view('user.hospitals')->with(['hospitals' => $hospitals]);

    }
}
