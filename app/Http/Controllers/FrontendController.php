<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Ourpartner;
use App\Models\SuccessStudent;
use App\Models\Trainer;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $all_courses = Course::where('status', '=','approve')->get();
        $all_trainers = Trainer::all();
        $all_success_students = SuccessStudent::all();
        $all_partners = Ourpartner::all();
        return view('frontend.index', compact('all_courses', 'all_trainers', 'all_success_students', 'all_partners'));
    }

    public function course_details($course_id){
        $course_details = Course::find($course_id);
        $related_courses = Course::where('category_id', $course_details->category_id)->where('id', '!=', $course_id)->get();
        /*return $course_details->category_id;
        return $related_course = Course::where('category_id', $course_details->category_id)->get();
        */
        return view('frontend.course_details', compact('course_details', 'related_courses'));
    }
}
