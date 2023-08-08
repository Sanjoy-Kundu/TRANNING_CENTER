<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    //
    public function dashboard(){
        if(Auth::user()->role == 'admin' || Auth::user()->role == 'vendor'){
            $all_courses = Course::all();
            $all_trainers = Trainer::all();
            return view('backend.dashboard', compact('all_courses', 'all_trainers'));
        }else{
            return view('backend.my_profile.my_profile');
        }
    }


}
