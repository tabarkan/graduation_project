<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Disease;
use App\Models\User;
use App\Models\DoctorFav;
use Auth;
use Carbon\Carbon;

class PagesController extends Controller
{
 
    public function doctorsFav(){
       
        $doctors = DoctorFav::get();
        return view('user.fav-doctors')->with(['doctors' => $doctors]);

    }

    public function hospitalsPage(){
        

        $hospitals = Hospital::where('accepted', 1)->get();
        return view('user.hospitals')->with(['hospitals' => $hospitals]);
        
    }
    public function doctorsPage(){
       
        $doctors = Doctor::where('accepted', 1)->get();
        return view('user.doctors')->with(['doctors' => $doctors]);

    }
    
    public function diseasesPage(){
        $diseases = Disease::where('accepted', 1)->get();
        return view('user.diseases')->with(['diseases' => $diseases]);
        
    }
    public function suggestsPage(){
        

        return view('user.suggest');
        }
    
  
    public function addDoctor(){
       
        return view('user.add-doctor');

    
}
    public function addHospital(){
      
        return view('user.add-hospital');
        }
    
    public function addDisease(){
       
        return view('user.add-disease');
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
