<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "course_title" => "required ||unique:courses,course_title",
            "course_price" => "required",
            "course_description" => "required",
            "course_image" => "required",
        ],[
            "course_title.required" => "Course Title is required",
            "course_title.unique" => "Course Name already taken",
            "course_price.required" => "Course Price is required",
            "course_image.required" => "Course Image is required",
        ]);
        $courseId = Course::insertGetId($request->except('_token') + [
            "created_at" => Carbon::now()
        ]);

        //first calculate image start
        if($request->hasFile("course_image")){
            $imageName ="-course-".Str::lower(Str::random(20)).".".$request->file("course_image")->extension();
            $imagePath = "uploads/course/".$imageName;
            Image::make($request->file("course_image"))->resize(300, 200)->save($imagePath);

            //update database
            Course::find($courseId)->update([
                "course_image" => $imageName,
            ]);
         //update database
        }
    //first calculate image start

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
