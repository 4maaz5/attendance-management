<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\adminn;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        $id = $request->input('id');
        $fromDate = $request->input('from');
        $toDate = $request->input('to');

        $student = Attendance::where('rollno', $id)->whereBetween('created_at',[ $fromDate, $toDate])->get();
        return view('report', ['student' => $student]);
    }
    public function index()
    {
        return view('report');
    }
    public function registered(Request $request)
    {
        $request->validate([
            'uname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm' => 'required'
        ]);
        $one = $request->input('password');
        $two = $request->input('confirm');
        if ($one != $two) {
            $message = "The password does not matched!";
            return view('registerr', ['message' => $message]);
        } else {
            $obj = new adminn();
            $obj->username = $request->uname;
            $obj->email = $request->email;
            $obj->password = $request->password;
            $obj->confirm = $request->confirm;
            $obj->password = $request->password;
            $obj->save();
            return view('login');
        }
    }
    public function detail(Request $request)
    {
        $id = $request->input('idtwo');
        $fromDate = $request->input('fromdate');
        $toDate = $request->input('todate');

        $student = Attendance::where('rollno', $id)->whereBetween('created_at', [$fromDate, $toDate])->get();
        return view('detail', ['student' => $student]);
    }
}
