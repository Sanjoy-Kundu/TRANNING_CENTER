<?php

namespace App\Http\Controllers;

use App\Mail\AccountCreation;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));
        // $users = User::where('role', $request->input('role'))->get();
        // return view('backend.users.index', compact('users'));


    }


    public function user_multiple_deter(Request $request){
//print_r($request->ids);
        $ids = $request->ids;
        User::whereIn('id', $ids)->delete();
        return back()->withSuccess("Multiple Data Deleted Successfully");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name' => 'required',
        'email' => 'required',
        'role' => 'required'
       ],[
        'name.required' => "User name is required",
        'email.required' => "User email is required",
        'role.required' => "Select One first",
       ]);

        $generatePassword =  Str::upper(Str::random(8));
       User::insert([
        'name' => $request ->name,
        'email' => $request ->email,
        'password' => bcrypt($generatePassword),
        'role' => $request ->role,
       ]);
       //return $generatePassword; //NIN4KIS7 == raton data

       $info = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => $generatePassword,
        'role' => $request->role,
       ];

       Mail::to($request->email)->send(new AccountCreation($info));
      return back()->with('success', 'Account creation successfully');

    }





    public function pending_list(){
        $pendingCourses =  Course::where('status', 'pending')->latest()->get();
        return view('backend.pending.pending_list', compact('pendingCourses'));
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
