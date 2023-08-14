<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Hospital;
use App\Models\HospitalComment;
use App\Models\HospitalLike;

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
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('hospitalsImages'), $imageName);
        if(Auth::user()->role == null){
            
            $hospital = Hospital::create([
                'name' => $request->name,
                'contact_email' => $request->contact_email,
                'contact_number' => $request->contact_number,
                'governorate' => $request->governorate,
                'region' => $request->region,
                'street' => $request->street,
                'address' => $request->address,
                'image_path' => $imageName,
                'accepted' => 0,
                'likes' => 0,
            ]);
        }
        else{
            $hospital = Hospital::create([
                'name' => $request->name,
                'contact_email' => $request->contact_email,
                'contact_number' => $request->contact_number,
                'website' => $request->website,
                'governorate' => $request->governorate,
                'region' => $request->region,
                'street' => $request->street,
                'image_path' => $imageName,
                'accepted' => 1,
                'likes' => 0,
            ]);
        }
        return redirect()->back();
    }
    public function editPage($id){
        if(Auth::user()->role == 1){
        $hospital = Hospital::where('id',$id)->get()->first();
        return view('admin.edit-hospitals')->with('hospital', $hospital);
    }
}
    public function edit(Request $request ,$id){
        if(Auth::user()->role == 1){
       
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
}
    public function show($id){
        if(Auth::user()->role == 1){
            $likes = HospitalLike::where('hospital_id', $id)->get('user_id');
            $isLiked = false;
            foreach($likes as $like){
                if($like->user_id == Auth::user()->id){
                    $isLiked = true;
                    break;
                }
            }
        $hospital = Hospital::where('id', $id)->get()->first();
        $comments = HospitalComment::where('hospital_id', $id)->get();
        
        // return view('user.hospital-show')->with(['hospital' => $hospital , 'comments' => $comments]);
        return view('user.hospital-show')->with([
            'hospital' => $hospital,
            'comments' => $comments,
            'isLiked' => $isLiked,
            'likes' => $likes,
        ]);
    }
}
    public function delete($id){
        if(Auth::user()->role == 1){
            hospital::where('id', $id)->delete();
        }
        return redirect()->back();
    }
    public function accept($id){
        if(Auth::user()->role == 1){

        $hospital = Hospital::where('id',$id)->update([
            'accepted' => 1,           
        ]);
        return redirect()->back();
    }
}
public function like($id){
    $likes = HospitalLike::where('hospital_id', $id)->get('user_id');
    $isLiked = false;
    foreach($likes as $like){
        if($like->user_id == Auth::user()->id){
            $isLiked = true;
            break;
        }
    }

    if($isLiked == false){
        $like = HospitalLike::create([
            'hospital_id' => $id,
            'user_id' => Auth::user()->id,
        ]);
    }
        return redirect('/hospital/show/'.$id);
}
public function likeDelete($id){
    $like = HospitalLike::where(['hospital_id' => $id, 'user_id' => Auth::user()->id])->delete();

    return redirect('/hospital/show/'.$id);
}
    
    public function commentAdd(Request $request, $id){
        if(Auth::user()->role == 1){
        $comment = HospitalComment::create([
            'user_id' => Auth::user()->id,  
            'hospital_id' => $id,
            'comment' => $request->comment,
        ]);
        return redirect()->back();
    }
}
public function governorateFilter(Request $request){

    $governorate = $request->governorate;
    $filterdHospitals = Hospital::where('governorate', $governorate)->get();
    return view('user.hospitals')->with('hospitals', $filterdHospitals);

}
public function search(Request $request){

    $name = $request->search;
    $result = Hospital::where('name', $name,)->get();
    return view('user.hospitals')->with('hospitals', $result);

    }
}
