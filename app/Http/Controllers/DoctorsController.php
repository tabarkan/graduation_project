<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index(){
        return view('admin.add-doctors');
    }

    
}
