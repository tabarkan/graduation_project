<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Disease;
use App\Models\Notification;
use Auth;

class AdminController extends Controller

{
    public function doctors(){
        if(Auth::user()->role == 1){
            $doctors = Doctor::get();

        return view('admin.doctors')->with(['doctors' => $doctors]);
        }
        else{
            return view('dashboard');
        }
    
      
    }
    public function hospitals(){
        if(Auth::user()->role == 1){
        $hospitals = Hospital::get();

        return view('admin.hospitals')->with(['hospitals' => $hospitals]);
    }
}
    public function diseases(){
        if(Auth::user()->role == 1){
        $diseases = Disease::get();

        return view('admin.diseases')->with(['diseases' => $diseases]);
    }
}
    public function notifications(){
        if(Auth::user()->role == 1){
        $notifications = Notification::get();

        return view('admin.notifications')->with(['notifications' => $notifications]);
    }
}
    public function deletedNotifications(){
        if(Auth::user()->role == 1){
        $notifications = Notification::onlyTrashed()->get();

        return view('admin.archived-notifications')->with(['notifications' => $notifications]);
    }
}
   

   
}
