<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Disease;

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
            
            $diseases = Disease::create([
                'disease_name' => $request->disease_name,
                'disease_category' => $request->disease_category,
                'treatment' => $request->treatment,
                'protection' => $request->protection,
                'symptoms' => $request->symptoms,
              
                
            ]);
        }
    }
        public function editPage($id){
        $diseases = Disease::where('id',$id)->get()->first();
        return view('admin.edit-diseases')->with('diseases', $diseases);
    }

    public function edit(Request $request, $id){
        if(Auth::user()->role == 1){

            $diseases = Disease::where('id',$id)->update([
                'disease_name' => $request->disease_name,
                'disease_category' => $request->disease_category,
                'treatment' => $request->treatment,
                'protection' => $request->protection,
                'symptoms' => $request->symptoms,
                'accepted' => 0,
            ]);
        }
        return redirect()->back();
    }

    public function delete($id){
        if(Auth::user()->role == 1){
            Disease::where('id', $id)->delete();
        }
        return redirect()->back();
    }
    public function accept($id){

        $disease =  Disease::where('id',$id)->update([
            'accepted' => 1,           
        ]);
        return redirect()->back();
    }

}