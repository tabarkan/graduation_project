<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Hospital;
use App\Models\HospitalComment;

class HospitalsController extends Controller
{

    public function index(){
        if(Auth::user()->role == 1){
            return view('admin.add-hospitals');
        }
        else{
            return view('dashboard');
        }
    }
    

    public function create(Request $request){
        if(Auth::user()->role == 1){

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('hospitalsImages'), $imageName);
            $hospital = Hospital::create([
                'name' => $request->name,
                'contact_email' => $request->contact_email,
                'contact_number' => $request->contact_number,
                'website' => $request->website,
                'address' => $request->address,
                'image_path' => $imageName,
                'accepted' => 0,
            ]);
        }
        return redirect()->back();
    }
    public function editPage($id){
        $hospital = Hospital::where('id',$id)->get()->first();
        return view('admin.edit-hospitals')->with('hospital', $hospital);
    }
    public function edit(Request $request ,$id){
       
        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('hospitalsImages'), $imageName);
            $oldImage = Hospital::where('id', $id)->get()->first()->image_path; 
            $deletedImage = unlink(public_path('hospitalsImages/' . $oldImage));
    
        if(Auth::user()->role == 1){

            $hospital = Hospital::where('id',$id)->update([
                'name' => $request->name,
                'contact_email' => $request->contact_email,
                'contact_number' => $request->contact_number,
                'website' => $request->website,
                'address' => $request->address,
                'image_path' => $imageName,
            ]);

        }
    }

    $hospital = Hospital::where('id',$id)->update([
        'name' => $request->name,
        'contact_email' => $request->contact_email,
        'contact_number' => $request->contact_number,
        'website' => $request->website,
        'address' => $request->address,
    
    ]);
       return redirect()->back();
    }
    public function show($id){
        $hospital = Hospital::where('id', $id)->get()->first();
        $comments = HospitalComment::where('hospital_id', $id)->get();
        
        return view('user.hospital-show')->with(['hospital' => $hospital , 'comments' => $comments]);
    }
    public function delete($id){
        if(Auth::user()->role == 1){
            hospital::where('id', $id)->delete();
        }
        return redirect()->back();
    }
    public function accept($id){

        $hospital = Hospital::where('id',$id)->update([
            'accepted' => 1,           
        ]);
        return redirect()->back();
    }
    
    public function commentAdd(Request $request, $id){
        $comment = HospitalComment::create([
            'user_id' => Auth::user()->id,  
            'hospital_id' => $id,
            'comment' => $request->comment,
        ]);
        return redirect()->back();
    }
}
