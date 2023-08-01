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
         $your_notices = Notice::where('user_id', '=', Auth::user()->id)->latest()->get();
        return view('backend.notice.all_notice_list', compact('your_notices'));
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

 public function approve_notice_list(){
     $approve_notices = Notice::where('user_id', '=', Auth()->user()->id)->get();
         if($approve_notices[0]->status == 'approve'){
            $your_approve_notices =Notice::all();
        return view('backend.notice.your_approve_notice', compact('your_approve_notices'));
     }else{
        return view('backend.notice.empty.empty_notice');
     }
 }


 public function pending_notice_list(){
    $pending_notices = Notice::where('user_id', '=', Auth::user()->id)->get();
    if($pending_notices[0]->status == 'pending'){
        $your_pending_list = Notice::all();
        return view('backend.users.notice.all_pending_notice', compact('your_pending_list'));
    }else{
        return view('backend.notice.empty.empty_notice');
    }
 }

 public function reject_notice_list(){
    $rejected_notice = Notice::where('user_id', '=', Auth::user()->id)->get();
    if($rejected_notice[0]->status == 'reject'){
        $your_rejected_notices = Notice::all();
        return view('backend.notice.your_rejected_notice', compact('your_rejected_notices'));
    }else{
        return view('backend.notice.empty.empty_notice');
    }
 }








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
    public function show(Notice $notice, $id)
    {
        $single_notice =  Notice::find($id);
        return view('backend.notice.edit_notice', compact('single_notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function notice_update(Request $request, $id)
    {
         Notice::find($id)->update([
            'notice_name' => $request->notice_name,
            'notice_description' => $request->notice_description,
        ]);
        return back()->withSuccess('Notice Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function notice_view($id)
    {
       $singleNotice = Notice::find($id);
        return view('backend.notice.view_notice', compact('singleNotice'));
    }


    public function notice_delete($id){
        Notice::find($id)->delete();
        return back()->withSuccess('Notice Deleted Successfully');
    }
}