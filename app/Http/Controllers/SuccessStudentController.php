<?php

namespace App\Http\Controllers;

use App\Models\SuccessStudent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class SuccessStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $successStudents = SuccessStudent::all();
        return view('backend.success_student.index', compact('successStudents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.success_student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'student_name' => "required",
            'student_title' => "required",
            'student_story' => "required",
            'student_image' => "required",
        ],[
            'student_name.required' => "This field is required",
            'student_title.required' => "This field is required",
            'student_story.required' => "This field is required",
            'student_image.required' => "This field is required",
        ]);


        $StudentSuccessId =  SuccessStudent::insertGetId($request->except('_token') + [
            "created_at" => Carbon::now(),
        ]);
            if($request->hasFile("student_image")){
                 $imageName ="success-student-".Str::lower(Str::random(20)).".".$request->file('student_image')->extension();
                 $imagePath = "uploads/student_success/".$imageName;
                 Image::make($request->file('student_image'))->resize(700, 700)->save($imagePath);
                //image database update
                SuccessStudent::find($StudentSuccessId)->update([
                    "student_image" => $imageName,
                ]);
            }
        return back()->with('success', 'Student Story Uploaded Successfully');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $successStudentView = SuccessStudent::find($id);
         return view('backend.success_student.view', compact('successStudentView'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuccessStudent $successStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuccessStudent $successStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuccessStudent $successStudent)
    {
        //
    }
}
