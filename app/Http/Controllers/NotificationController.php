<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Auth;

class NotificationController extends Controller
{
    public function create(Request $request){

        if(Auth::user()){
            $notification = Notification::create([
                'issue' => $request->issue,
                'section' => $request->section,
                'user_id' => Auth::user()->id, 
            ]);
        }
        return redirect()->back();
            
    }

    public function show($id){
        $notification = Notification::where('id', $id)->get()->first();
        
        return view('admin.issue-show')->with('notification',$notification );
    }
}
