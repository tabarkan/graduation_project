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
    public function add(){
        if(Auth::user()->role == 0){
            return view('user.add-doctor');
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
                'accepted' => 0,
                
            ]);
        }
        return redirect()->back();
    }
    public function editPage($id){
        $doctor = Doctor::where('id',$id)->get()->first();
        return view('admin.edit-doctors')->with('doctor', $doctor);
    }

    public function edit(Request $request, $id){
        
        
        if($request->image){
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('doctorsImages'), $imageName);
        $oldImage = Doctor::where('id', $id)->get()->first()->image_path; 
        $deletedImage = unlink(public_path('doctorsImages/' . $oldImage));

            if(Auth::user()->role == 1){

            
                    $doctor = Doctor::where('id',$id)->update([
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

        $doctor = Doctor::where('id',$id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'specialization' => $request->specialization,
            'address' => $request->address,
            'hospital' => $request->hospital,    
            
        ]);

        return redirect()->back();
    }

    public function delete($id){
        if(Auth::user()->role == 1){
            Doctor::where('id', $id)->delete();
        }
        return redirect()->back();
    }
    public function accept($id){

        $doctor = Doctor::where('id',$id)->update([
            'accepted' => 1,           
        ]);
        return redirect()->back();
    }
}
