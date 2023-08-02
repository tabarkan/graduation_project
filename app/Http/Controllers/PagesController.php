<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Disease;
use App\Models\User;

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

    public function diseasesPage(){

        $diseases = Disease::get();
        return view('user.diseases')->with(['diseases' => $diseases]);

    }

    public function admin(){

        $diseases = Disease::get();
        $doctors = Doctor::get();
        $hospitals = Hospital::get();
        $users = User::get();
        $admins = $users->where('role',1);
        return view('admin.admin-main')->with(['diseases' => $diseases,'doctors' => $doctors,'hospitals' => $hospitals,'users' => $users, 'admins' =>$admins]);
    }
    
}
