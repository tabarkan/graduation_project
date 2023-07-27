<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Doctor;

class DoctorsController extends Controller
{

    public function index(){
        if(Auth::user()->role == 1){
            return view('admin.add-doctors');
        }
        else{
            return view('dashboard');
        }
    }


    public function create(Request $request){
        if(Auth::user()->role == 1){

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('doctorsImages'), $imageName);
            $doctor = Doctor::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'specialization' => $request->specialization,
                'address' => $request->address,
                'hospital' => $request->hospital,
                'image_path' => $imageName,
                
            ]);
        }
    }
    public function editPage($id){
        $doctor = Doctor::where('id',$id)->get()->first();
        return view('admin.edit-doctors')->with('doctor', $doctor);
    }

    public function edit(Request $request, $id){
        if(Auth::user()->role == 1){

            // dd($id);
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('doctorsImages'), $imageName);
            $doctor = Doctor::where('id',$id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'specialization' => $request->specialization,
                'address' => $request->address,
                'hospital' => $request->hospital,
                // 'image_path' => $imageName,
                
            ]);
        }
    }




}
