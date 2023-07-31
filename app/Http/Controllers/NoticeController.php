<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_notices = Notice::all();
        return view('backend.notice.all_notice_list', compact('all_notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'notice_name' => 'required',
            'notice_description' => 'required'
        ],
        [
            'notice_name.required' => 'Notice Name is required',
            'notice_description.required' => 'Notice Description is required',
        ]);

        Notice::insert([
            'user_id' => Auth::user()->id,
            'notice_name' => $request->notice_name,
            'notice_description' => $request->notice_description,
            'created_at' => Carbon::now()
        ]);
        return back()->withSuccess('Notice Uploaded Successfully');
    }













/***
 *
 * Notice approve form
 *
 */
public function notice_approve_form($id){
    $approve_notice = Notice::find($id);
    return view('backend.users.notice.approve_notice_form', compact('approve_notice'));
}

public function notice_approve_store(Request $request, $id){

    Notice::find($id)->update([
        'status' => $request->status,
    ]);
    return back()->with('success', 'Notice Approve successfully');
}


public function notice_reject_form($id){
    $reject_notice = Notice::find($id);
    return view('backend.users.notice.rejected_notice', compact('reject_notice'));
}



public function notice_reject_store(Request $request, $id){
    Notice::find($id)->update([
        'status' => $request->status,
    ]);
    return back()->with('success', 'Your Notice Rejected Successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notice $notice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notice $notice)
    {
        //
    }
}
