<?php

namespace App\Http\Controllers;

use App\Models\AdvanceProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class AdvanceProfileController extends Controller
{


    /***
     * Advance Profile just show
     */
    public function advance_profile(){
        return view('backend.my_profile.advance_profile');
    }

    /**
     * Advance Job Profile form
     */
    public function job_profile_advance(){
       $AdvanceProfileStatus = AdvanceProfile::where('user_id', Auth::user()->id)->get();
       if($AdvanceProfileStatus->count() < 1){
        return view('backend.my_profile.job_profile');
       }else{
        $jobProfile = AdvanceProfile::all();
        return view('backend.my_profile.job_profile_update', compact('jobProfile'));
       }

    }

    /***
     * Advance job profile job store database
     */
    public function job_profile_store_advance(Request $request){

    $request->validate([
        'job_profile_name'                       => 'required',
        'job_profile_email'                       => 'required',
        'job_profile_designation'             => 'required',
        'job_profile_phone_number'        => 'required',
        'job_profile_address'                   => 'required',
        'job_profile_your_skills'              => 'required',
        'job_profile_portfolio'                  => 'required',
        'job_profile_github_account'     => 'required',
    ],
    [
        'job_profile_name.required' => 'This field is required',
        'job_profile_email.required' => 'This field is required',
        'job_profile_designation.required' => 'This field is required',
        'job_profile_phone_number.required' => 'This field is required',
        'job_profile_address.required' => 'This field is required',
        'job_profile_your_skills.required' => 'This field is required',
        'job_profile_portfolio.required' => 'This field is required',
        'job_profile_github_account.required' => 'This field is required',
        'job_profile_your_photo.required' => 'This field is required',
 ]);


                        $AdvanceProfileStatus = AdvanceProfile::where('user_id', Auth::user()->id)->get();
                        if($AdvanceProfileStatus->count() < 1){
                            AdvanceProfile::insertGetId([
                                'user_id' => Auth::user()->id,
                                'job_profile_name' => $request->job_profile_name,
                                'job_profile_email' => $request->job_profile_email,
                                'job_profile_designation' => $request->job_profile_designation,
                                'job_profile_phone_number' => $request->job_profile_phone_number,
                                'job_profile_address' => $request->job_profile_address,
                                'job_profile_your_skills' => $request->job_profile_your_skills,
                                'job_profile_portfolio' => $request->job_profile_portfolio,
                                'job_profile_github_account' => $request->job_profile_github_account,
                                'created_at' => Carbon::now()
                                 ]);
                             return back()->withSuccess('Advance Profile Uploaded Success');
                        }


    }


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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AdvanceProfile $advanceProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdvanceProfile $advanceProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdvanceProfile $advanceProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdvanceProfile $advanceProfile)
    {
        //
    }
}
