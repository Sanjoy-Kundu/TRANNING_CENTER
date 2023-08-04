<?php

namespace App\Http\Controllers;

use App\Models\Myprofile;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyprofileController extends Controller
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
    /**
  * student dashboard
  */
  public function my_profile(){

    return view('backend.my_profile.my_profile');
  }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'your_current_password'           => 'required',
            'password'                                 => 'required',
            'password_confirmation'          => 'required',
        ],[
            'your_current_password.required'               => 'Your Password is required',
            'password.required'                                     => 'Your Password is required',
            'password_confirmation  .required'               => 'Your Password is required',
        ]);

        //echo Auth::user()->password;
        //return  Hash::check($request->newPassword, Auth::user()->password);
        // if(Hash::check($request->your_current_password , Auth::user()->password)){
        //         User::find(Auth::user()->id)->update([
        //             'password' => Hash::make($request->password)
        //         ]);
        //         return back()->withSuccess('Your Password Updated Successfully');
        // }else{
        //     return back()->withSuccess('Current Password does not match');
        // }

        if($request->password == $request->password_confirmation){
                if(Hash::check($request->your_current_password, Auth::user()->password)){
                    User::find(Auth::user()->id)->update([
                        'password' => Hash::make($request->password)
                    ]);
                    return back()->withSuccess('Your Password Updated Successfully');
                }
                else{
                    return back()->withSuccess('Your Current password does not match');
                }
        }else{
           return back()->withSuccess('Your new Password and Confirm password does not match');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Myprofile $myprofile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Myprofile $myprofile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Myprofile $myprofile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Myprofile $myprofile)
    {
        //
    }
}
