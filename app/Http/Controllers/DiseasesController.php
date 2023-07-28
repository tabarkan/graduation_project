<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Diseases;

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
                'disease_name' => $request->disease_name,
                'disease_category' => $request->disease_category,
                'treatment' => $request->treatment,
                'protection' => $request->protection,
                'symptoms' => $request->symptoms,
              
                
            ]);
        }
    }
        public function editPage($id){
        $diseases = Diseases::where('id',$id)->get()->first();
        return view('admin.edit-diseases')->with('diseases', $diseases);
    }

    public function edit(Request $request, $id){
        if(Auth::user()->role == 1){

            // dd($id);
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('doctorsImages'), $imageName);
            $doctor = Doctor::where('id',$id)->update([
                'disease_name' => $request->disease_name,
                'disease_category' => $request->disease_category,
                'treatment' => $request->treatment,
                'protection' => $request->protection,
                'symptoms' => $request->symptoms,
                // 'image_path' => $imageName,
                
            ]);
        }
    }




}