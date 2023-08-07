<?php

namespace App\Http\Controllers;

use App\Models\StudentDashboard;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function student_dashboard()
    {
        return view('backend.my_profile.my_profile');
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
    public function show(StudentDashboard $studentDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentDashboard $studentDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentDashboard $studentDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentDashboard $studentDashboard)
    {
        //
    }
}
