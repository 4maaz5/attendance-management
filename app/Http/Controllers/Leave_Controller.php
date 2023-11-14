<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leave;
use App\Models\admin;

class Leave_Controller extends Controller
{
    public function index()
    {
        $leave = leave::all();
        return view('markleave', ['leave' => $leave]);
    }

    public function leaveData()
    {
        $data = leave::paginate(5);
        return view('leaveapproval', ['data' => $data]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'jobtitle' => 'required',
            'number' => 'required',
            'email' => 'required',
            'reason' => 'required',
            'date' => 'required'
        ]);

        $leave = new leave;
        $leave->fname = $request->fname;
        $leave->lname = $request->lname;
        $leave->jobtitle = $request->jobtitle;
        $leave->number = $request->number;
        $leave->email = $request->email;
        $leave->reason = $request->reason;
        $leave->date = $request->date;
        $leave->action = "Waiting...";
        $leave->save();
        return redirect(route('second'))->with('message', 'Leave Submitted Successfully!');
    }
    public function display()
    {
        return view('adminlogin');
    }
}
