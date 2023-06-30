<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class TrainerController extends Controller
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
        return view('backend.trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {




        $request->validate([
            'trainer_name' => "required",
            'trainer_title' => "required",
            'trainer_description' => "required",
            'trainer_salary' => "required",
            'trainer_facebook_link' => "required",
            'trainer_linkdin_link' => "required",
            'trainer_image' => "required",


        ],[
            'trainer_name' => "This field is required",
            'trainer_title' => "This field is required",
            'trainer_description' => "This field is required",
            'trainer_salary' => "This field is required",
            'trainer_facebook_link' => "This field is required",
            'trainer_linkdin_link' => "This field is required",
            'trainer_image.required' => "Image field is required",
        ]);

        $trainerId = Trainer::insertGetId($request->except('_token') + [
            "created_at" => Carbon::now()
        ]);



        if($request->hasFile("trainer_image")){
            $imageName = "trainer-".Str::lower(Str::random(20)).'.'.$request->file('trainer_image')->extension();
            $imagePath = "uploads/trainers/".$imageName;
            Image::make($request->file("trainer_image"))->resize(300, 200)->save($imagePath);

            //trainer image update start
            Trainer::find($trainerId)->update([
                'trainer_image' => $imageName
            ]);
            //trainer image update end
        }
        return back()->with('success', "Trainer Added Successfully");
    }

    
    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainer $trainer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trainer $trainer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainer $trainer)
    {
        //
    }
}
