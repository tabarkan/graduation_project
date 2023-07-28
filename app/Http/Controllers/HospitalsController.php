<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Hospital;

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
        if(Auth::user()->role == 1)

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('hospitalImages'), $imageName);

            $hospital = Hospital::create([
                'name' => $request->name,
                'contact_email' => $request->contact_email,
                'contact_number' => $request->contact_number,
                'website' => $request->website,
                'address' => $request->address,
                // 'image_path' => $imageName,
            ]);
        // }
    }
    public function editPage($id){
        $hospital = Hospital::where('id',$id)->get()->first();
        return view('admin.edit-hospitals')->with('hospital', $hospital);
    }
    public function edit(Request $request ,$id){
        if(Auth::user()->role == 1)

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('hospitalImages'), $imageName);

            $hospital = Hospital::where('id',$id)->update([
                'name' => $request->name,
                'contact_email' => $request->contact_email,
                'contact_number' => $request->contact_number,
                'website' => $request->website,
                'address' => $request->address,
                // 'image_path' => $imageName,
            ]);
        // }
    }
}
