<?php

namespace App\Http\Controllers;

use App\Models\Myprofile;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;


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
    public function profile_store(Request $request, $id)
    {
        if($request->hasFile('your_image')){
            $your_profile_indb = User::find($id)->profile;
            if($your_profile_indb == NULL){
                $profileImageName ="profile-".Str::lower(Str::random(20)).".".$request->file("your_image")->extension();
                $profilePath ='uploads/user_profile/'.$profileImageName;
                Image::make($request->file("your_image"))->resize(400, 400)->save($profilePath);

                User::find($id)->update([
                    'profile' => $profileImageName
                ]);
                return back()->withSuccess('Profile Uploaded Successfully');
            }else{

                //if profile image on database then update
               if($request->hasFile('your_image')){
                $profile_image = User::find($id)->your_image;
                if($profile_image != NULL){
                   unlink(public_path('uploads/user_profile/'.$profile_image));
                }
                $update_image = "update-profile".Str::lower(Str::random(20)).".".$request->file("your_image")->extension();
                $path = 'uploads/user_profile/'.$update_image;
                Image::make($request->file("your_image"))->resize(400, 400)->save($path);

                User::find($id)->update([
                   'profile' => $update_image,
                ]);
            }
            return back()->with('update_profile', 'Your profile updated Successfully');
        }
        //if profile image on database then update
    }else{
        User::find($id)->update([
            'name' => $request->your_name
        ]);
        return back()->with('name_update', 'Name Updated Successfully');
    }
    }



    /**
     * Advance Profile Link
     */
    // public function advance_profile(){
    //     return view('backend.my_profile.advance_profile');
    // }

    // public function job_profile_advance(){
    //     return view('backend.my_profile.job_profile');
    // }

    public function job_profile_store_advance(Request $request , $id){
        $request->validate([
            'job_profile_name'                       => 'required',
            'job_profile_email'                       => 'required',
            'job_profile_designation'             => 'required',
            'job_profile_phone_number'        => 'required',
            'job_profile_address'                   => 'required',
            'job_profile_your_skills'              => 'required',
            'job_profile_portfolio'                  => 'required',
            'job_profile_github_account'     => 'required',
            'job_profile_your_photo'           => 'required',
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




     Myprofile::insert([
        'User_id' =>$id,
        'your_name' => $request ->job_profile_name,
        'your_email' => $request ->job_profile_email,
        'your_designation' => $request ->job_profile_designation,
        'your_mobile_number' => $request ->job_profile_phone_number,
        'your_address' => $request ->job_profile_address,
        'your_skills' => $request ->job_profile_your_skills,
        'your_portfolio' => $request ->job_profile_portfolio,
        'your_github_link' => $request ->job_profile_github_account,
        'created_at' => Carbon::now(),
     ]);
        return 'data inserted ok';
    }
}
