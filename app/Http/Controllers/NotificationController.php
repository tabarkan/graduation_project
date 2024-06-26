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
        return redirect()->back()->with('message', 'تم ارسال بلاغك بنجاح');
            
    
}

    public function show($id){
        if(Auth::user()->role == 1){
        $notification = Notification::where('id', $id)->get()->first();
        
        return view('admin.issue-show')->with('notification',$notification );
    }
}
    public function showDeleted($id){
        if(Auth::user()->role == 1){
        $notification = Notification::onlyTrashed()->where('id', $id)->get()->first();
        return view('admin.issue-show')->with('notification',$notification );
    }
}
public function delete($id){

    if(Auth::user()->role == 1){
        Notification::where('id', $id)->delete();
    }
    
    $notifications = Notification::get();

    return view('admin.notifications')->with(['notifications' => $notifications]);
}
public function forceDelete($id){

    if(Auth::user()->role == 1){
        Notification::where('id', $id)->forceDelete();
    }
    
    $notifications = Notification::get();

    return view('admin.notifications')->with(['notifications' => $notifications]);
}
}
