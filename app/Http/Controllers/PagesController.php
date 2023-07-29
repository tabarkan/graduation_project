<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class PagesController extends Controller
{
    public function doctorsPage(){

        $doctors = Doctor::get();
        return view('user.doctors')->with(['doctors' => $doctors]);

    }
}
