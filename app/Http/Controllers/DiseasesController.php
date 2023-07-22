<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiseasesController extends Controller
{
    public function index(){
        if(Auth::user()->role == 1){
            return view('admin.add-diseases');
        }
        else{
            return view('dashboard');
        }
    }


    public function create(Request $request){
        if(Auth::user()->role == 1){
            $diseases = Diseases::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'specialization' => $request->specialization,
                'address' => $request->address,
                'hospital' => $request->hospital,
                
            ]);
        }
    }
}
