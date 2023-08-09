<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Disease;
use App\Models\User;
use Auth;
class PagesController extends Controller
{
    public function doctorsPage(){
        if(Auth::user()->role == 1){

        $doctors = Doctor::get();
        return view('user.doctors')->with(['doctors' => $doctors]);

    }
}
    public function hospitalsPage(){
        if(Auth::user()->role == 1){

        $hospitals = Hospital::get();
        return view('user.hospitals')->with(['hospitals' => $hospitals]);
        }
    }

    public function diseasesPage(){
        if(Auth::user()->role == 1){
        $diseases = Disease::get();
        return view('user.diseases')->with(['diseases' => $diseases]);
        }
    }
    public function suggestsPage(){
        if(Auth::user()->role == 1){

        return view('user.suggest');
        }
    }
  
    public function addDoctor(){
        if(Auth::user()->role == 1){
        return view('user.add-doctor');

    }
}
    public function addHospital(){
        if(Auth::user()->role == 1){
        return view('user.add-hospital');
        }
    }
    public function addDisease(){
        if(Auth::user()->role == 1){
        return view('user.add-disease');
        }
    }

    public function admin(){
        if(Auth::user()->role == 1){
        $diseases = Disease::get();
        $doctors = Doctor::get();
        $hospitals = Hospital::get();
        $users = User::get();
        $admins = $users->where('role',1);
        return view('admin.admin-main')->with(['diseases' => $diseases,'doctors' => $doctors,'hospitals' => $hospitals,'users' => $users, 'admins' =>$admins]);
    }
}
}
