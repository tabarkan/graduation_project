<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Doctor;
use App\Models\DoctorComment;
use App\Models\DoctorLike;

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
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('doctorsImages'), $imageName);
        if(Auth::user()->role == null){

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
        else{
           
                $doctor = Doctor::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'specialization' => $request->specialization,
                    'address' => $request->address,
                    'hospital' => $request->hospital,
                    'image_path' => $imageName,
                    'accepted' => 1,
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

    public function show($id){
        if(Auth::user()->role == 1){
            $likes = DoctorLike::where('doctor_id', $id)->get('user_id');
            $isLiked = false;
            foreach($likes as $like){
                if($like->user_id == Auth::user()->id){
                    $isLiked = true;
                    break;
                }
            }
        $doctor = Doctor::where('id', $id)->get()->first();
        $comments = DoctorComment::where('doctor_id', $id)->get();
        
        return view('user.doctor-show')->with([
            'doctor' => $doctor,
            'comments' => $comments,
            'isLiked' => $isLiked,
            'likes' => $likes,
        ]);
    }
    }
    public function delete($id){
        if(Auth::user()->role == 1){
            Doctor::where('id', $id)->delete();
        }
        return redirect()->back();
    }
    public function accept($id){
        if(Auth::user()->role == 1){
        $doctor = Doctor::where('id',$id)->update([
            'accepted' => 1,           
        ]);
        return redirect()->back();
    }

    }
    public function like($id){
        $likes = DoctorLike::where('doctor_id', $id)->get('user_id');
        $isLiked = false;
        foreach($likes as $like){
            if($like->user_id == Auth::user()->id){
                $isLiked = true;
                break;
            }
        }

        if($isLiked == false){
            $like = DoctorLike::create([
                'doctor_id' => $id,
                'user_id' => Auth::user()->id,
            ]);
        }
            return redirect('/doctor/show/'.$id);
    }
    public function likeDelete($id){
        $like = DoctorLike::where(['doctor_id' => $id, 'user_id' => Auth::user()->id])->delete();
    
        return redirect('/doctor/show/'.$id);
    }
    public function commentAdd(Request $request, $id){
        if(Auth::user()->role == 1){
        $comment = DoctorComment::create([
            'user_id' => Auth::user()->id,  
            'doctor_id' => $id,
            'comment' => $request->comment,
        ]);
        return redirect()->back();
    }
    }

    public function specializationFilter(Request $request){

        $specialization = $request->specialization;
        $filterdDoctors = Doctor::where('specialization', $specialization)->get();
        return view('user.doctors')->with('doctors', $filterdDoctors);
    
    }
}
