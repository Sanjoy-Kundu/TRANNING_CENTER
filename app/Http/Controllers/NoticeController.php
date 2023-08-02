<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{

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



    /**
     * :::::::::::::::::::::::::::::::::::::::::::::::::Display a listing of the resource. vendor notice part :::::::::::::::::::::::::::::::::::::::
     */
    public function index()
    {
         $your_notices = Notice::where('user_id', '=', Auth::user()->id)->latest()->get();
         if($your_notices->count() > 0){
            return view('backend.users.notice.vendor.all_notice', compact('your_notices'));
         }else{
            return view('backend.notice.empty.empty_notice');
         }
    }
/**
 * vendor view notice
 */
    public function notice_view($id)
    {
       $singleNotice = Notice::find($id);
        return view('backend.users.notice.vendor.view_notice', compact('singleNotice'));
    }

    /*
    *show notice
    */
    public function show(Notice $notice, $id)
    {
        $single_notice =  Notice::find($id);
        return view('backend.users.notice.vendor.edit_notice', compact('single_notice'));
    }

    /**
     * Update notice vendor
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
     * Notice vendor delete
     */
    public function notice_delete($id){
        Notice::find($id)->delete();
        return back()->withSuccess('Notice Deleted Successfully');
    }


    /***
     * Notice vendor recycle bin
     */
    public function notice_recyclebin_all(){
        $recycleBinLists = Notice::onlyTrashed()->get();
        if($recycleBinLists->count() > 0){
           $recycleBinLists = Notice::onlyTrashed()->get();
           return view('backend.users.notice.vendor.all_recycle_bin_notice', compact('recycleBinLists'));
        }else{
           return view('backend.notice.empty.empty_notice');
        }
   }

   /**
    * Notice vendor restore
    */
    public function notice_recycleBin_restore($id){
        Notice::onlyTrashed()->find($id)->restore();
        return back()->with('success', 'Notice Restore Successfully');
    }

    /**
     * Vendor notice permanent delete
     */
    public function notice_permanent_delete($id){
        Notice::onlyTrashed()->find($id)->forceDelete();
        return back()->with('success', 'Notice Permanent Deleted Successfully');
    }

   /* * :::::::::::::::::::::::::::::::::::::::::::::::::Display a listing of the resource. vendor notice part end :::::::::::::::::::::::::::::::::::::::*/




   /***
    *::::::::::::::::::::::: Notice list admin control start:::::::::::::::::::::::::::
    */

     //* Admin all notice list
    public function all_notice_admin()
    {
          $your_notices = Notice::all();

         if($your_notices->count() > 0){
            return view('backend.users.notice.admin.all_notice_list', compact('your_notices'));
         }else{
            return view('backend.notice.empty.empty_notice');
         }
    }

    //admin approve notice list
    public function admin_approve_notice_list(){
     $all_admin_approveNotice_lists = Notice::where('status', '=', 'approve')->get();
        if($all_admin_approveNotice_lists->count() > 0){
            return view('backend.users.notice.admin.admin_approve_notice', compact('all_admin_approveNotice_lists'));
        }else{
            return view('backend.notice.empty.empty_notice');
        }
    }

//admin pending notice list
public function admin_pending_notice_list(){
    $all_admin_pendingNotice_lists = Notice::where('status', '=', 'pending')->get();
       if($all_admin_pendingNotice_lists->count() > 0){
           return view('backend.users.notice.admin.admin_pending_notice', compact('all_admin_pendingNotice_lists'));
       }else{
           return view('backend.notice.empty.empty_notice');
       }
   }




   //notice approve form admin
   public function admin_notice_pending_approve_form($id){
    $status_form = Notice::find($id);
    return view('backend.users.notice.admin.admin_notice_approve_form', compact('status_form'));
}
public function notice_status_store(Request $request, $id){
    Notice::find($id)->update([
        'status' => $request->status,
    ]);
    return back()->with('success', 'Notice Approve successfully');
}



public function admin_notice_delete($id){
    Notice::find($id)->delete();
    return back()->withSuccess('Notice Deleted Successfully');
}


public function admin_notice_recyclebin_all(){
    $recycleBinLists = Notice::onlyTrashed()->get();
    if($recycleBinLists->count() > 0){
        $recycleBinLists = Notice::onlyTrashed()->get();
       return view('backend.users.notice.admin_recyclebin', compact('recycleBinLists'));
    }else{
       return view('backend.notice.empty.empty_notice');
    }
}

   /***
    *::::::::::::::::::::::: Notice list admin control end:::::::::::::::::::::::::::
    */

}
