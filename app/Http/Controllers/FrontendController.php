<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $all_courses = Course::all();
        return view('frontend.index', compact('all_courses'));
    }

    public function course_details($course_id){
       $course_details = Course::find($course_id);
        return view('frontend.course_details', compact('course_details'));
    }
}
