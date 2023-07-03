<?php

namespace App\Http\Controllers;

use App\Models\Ourpartner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class OurpartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Ourpartner::all();
        return view('backend.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request -> validate([
        'partner_name' => "required",
        'partner_image' => 'required',
       ], [
        'partner_name.required' => "Name field is required",
        'partner_image.required' => "Image field is required",
       ]);

       $partnerId = Ourpartner::insertGetId($request->except('_token') + [
        'created_at' => Carbon::now(),
       ]);



              //first calculate image start
              if($request->hasFile("partner_image")){
                $imageName ="-partner-".Str::lower(Str::random(20)).".".$request->file("partner_image")->extension();
                $imagePath = "uploads/partners/".$imageName;
                Image::make($request->file("partner_image"))->resize(400, 400)->save($imagePath);

                //update database
                Ourpartner::find($partnerId)->update([
                    "partner_image" => $imageName,
                ]);
             //update database
            }
        //first calculate image start
        return back()->with('success', 'Partner Uploaded Successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $partnerView = Ourpartner::find($id);
        return view('backend.partner.view', compact('partnerView'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ourpartner $ourpartner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ourpartner $ourpartner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ourpartner $ourpartner)
    {
        //
    }
}
