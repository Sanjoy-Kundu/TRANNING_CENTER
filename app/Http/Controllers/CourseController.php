<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Trainer;
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
        //$courses = Course::all();
        $courses = Course::where('user_id', Auth()->user()->id)->latest()->get();
        $trashedCourse = Course::onlyTrashed()->latest()->get();
        return view('backend.course.index', compact('courses', 'trashedCourse'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courseCategories = Category::all();
        $Instructors = Trainer::all();
        return view('backend.course.create', compact('courseCategories', 'Instructors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            "course_title" => "required",
            "course_price" => "required",
            "course_duration" => "required",
            "course_description" => "required",
             "course_image" => "required",
             "total_seats" => "required",
        ],[
            "course_title.required" => "Course Title is required",
            "course_price.required" => "Course Price is required",
            "course_duration.required" => "Course Duration is required",
            "course_image.required" => "Course Image is required",
            "total_seats.required" => "Total  is required",
        ]);


            //discount check start
            if($request->discount){
                $discount = $request->discount;
                 $discounted_price =  ($request->course_price - ($request->course_price * ($request->discount) / 100));
            }else{
                $discount = 0;
                $discounted_price = $request->course_price;
            }
            //discount  check end


            if(Auth::user()->role == 'admin'){
                $status = 'approve';
            }else{
                 $status = 'pending';
            }




        $courseId = Course::insertGetId([
            'user_id' => Auth::user()->id,
            'course_title' => $request->course_title,
            'category_id' => $request->category_id,
            'instructor_id' => $request->instructor_id,
            'course_price' => $request->course_price,
            'course_duration' => $request->course_duration,
            'discount' => $discount,
            'total_seats' => $request->total_seats,
            'discounted_price' => $discounted_price,
            'status' => $status,
            'course_description' => $request->course_description,
            'course_image' => $request->course_image,
            'created_at' => Carbon::now(),
        ]);


        //first calculate image start
        if($request->hasFile("course_image")){
            $imageName ="-course-".Str::lower(Str::random(20)).".".$request->file("course_image")->extension();
            $imagePath = "uploads/course/".$imageName;
            Image::make($request->file("course_image"))->resize(400, 400)->save($imagePath);

            //update database
            Course::find($courseId)->update([
                "course_image" => $imageName,
            ]);
         //update database
        }
    //first calculate image start

        return back()->with('success', "Course Inserted Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

         $singleInfo = Course::find($id);
         return view('backend.course.view', compact('singleInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $editItem =  Course::find($id);
        $Instructors = Trainer::all();
        $courseCategories = Category::all();
        return view('backend.course.edit', compact('editItem','Instructors', 'courseCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    function update(Request $request, $id){

                Course::find($id)->update([
            'course_title' => $request->course_title,
            'category_id' => $request->category_id,
            'instructor_id' => $request->instructor_id,
            'course_price' => $request->course_price,
            'course_duration' => $request->course_duration,
            'discount' => $request->discount,
            'total_seats' => $request->total_seats,
            'discounted_price' => $request->discounted_price,
            'course_description' => $request->course_description,
       ]);

           //         // return $request->hasFile('update_course_image');
            if($request->hasFile('course_image')){
                $course_image = Course::find($id)->course_image;
                if($course_image != NULL){
                   unlink(public_path('uploads/course/'.$course_image));
                }

                $update_image = "update-course-".Str::lower(Str::random(20)).".".$request->file("course_image")->extension();
                $path = 'uploads/course/'.$update_image;
                Image::make($request->file("course_image"))->resize(400, 400)->save($path);

                Course::find($id)->update([
                   'course_image' => $update_image,
                ]);
           }



       return back()->withSuccess('Course Updated Successfully');
    }


    //      function update(Request $request, $id)
    // {
    //     return $request;
    //     die();

    //     Course::find($id)->update([
    //         'course_price' => $request->update,
    //         'course_title' => $request->course_title,
    //         'category_id' => $request->category_id,
    //         'instructor_id' => $request->instructor_id,
    //         'course_price' => $request->course_price,
    //         'course_duration' => $request->course_duration,
    //         'discount' => $request->discount,
    //         'total_seats' => $request->total_seats,
    //         'discounted_price' => $request->discounted_price,
    //         'course_description' => $request->course_description,
    //    ]);


    //         // return $request->hasFile('update_course_image');
    //         if($request->hasFile('update_course_image')){
    //             $course_image = Course::find($id)->course_image;
    //             if($course_image != NULL){
    //                unlink(public_path('uploads/course/'.$course_image));
    //             }

    //             $update_image = "update-course-".Str::lower(Str::random(20)).".".$request->file("update_course_image")->extension();
    //             $path = 'uploads/course/'.$update_image;
    //             Image::make($request->file("update_course_image"))->resize(400, 400)->save($path);

    //             Course::find($id)->update([
    //                'course_image' => $update_image,
    //             ]);
    //        }


    //    return back()->with('success', 'Course Updated Successfully');
    // }




    /*
    *Delete the specified course
    */
        public function delete($id){
            Course::find($id)->delete();
            return back()->with('message', 'Course Deleted Successfully');
        }



        public function restore($id){
            Course::onlyTrashed()->find($id)->restore();
            return back()->withSuccess('Course Restore Successfully');
        }



        public function permanent_delete($id){
          Course::onlyTrashed()->find($id)->forceDelete();
          return back()->withSuccess('Course Permanent deleted Successfully');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }




    /**
     * ===============approve form system start============
     */
    public function approve_form($id){
        $pendingCourse =  Course::find($id);
        return view('backend.pending.approve_form', compact('pendingCourse'));
    }


    public function approve_store(Request $request, $id){
        Course::find($id)->update([
            'status' => $request->status
        ]);
        return back()->with('success', 'Course Approve Successfully');
    }

    public function approve_post_view($id){
        $singleInfo = Course::find($id);
        return view('backend.pending.approve_post_view',compact('singleInfo'));
    }
    /*
    * ===============approve form system end ============
   */






    /**
     * ===============pending form system start============
     */
    public function pending_form($id){
        $pendingCourse =  Course::find($id);
        return view('backend.pending.pending_form', compact('pendingCourse'));
    }

    public function pending_store(Request $request, $id){
        Course::find($id)->update([
            'status' => $request->status
        ]);
        return back()->withSuccess('Your Post Updated Successfully');
    }


    public function pending_post_view($id){
        $singleInfo = Course::find($id);
        return view('backend.pending.pending_post_view', compact('singleInfo'));
    }
 /**
     * ===============pending form system end============
 */






 /**
     * ===============reject form system start============
 */
    public function reject_course($id){

       $rejectCourse =  Course::find($id);
       return view('backend.pending.rejected_form', compact('rejectCourse'));
    }


    public function reject_store(Request $request, $id){
        Course::find($id)->update([
            'reject' => $request->reject
        ]);
        return back()->withSuccess('Your Course Updated Successfully');
    }
}
