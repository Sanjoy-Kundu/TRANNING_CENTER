<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //
    public function dashboard(){
        $all_courses = Course::all();
        $all_trainers = Trainer::all();

        return view('backend.dashboard', compact('all_courses', 'all_trainers'));
    }
}
