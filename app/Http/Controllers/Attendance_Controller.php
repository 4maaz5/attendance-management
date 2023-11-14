<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\adminn;

class Attendance_Controller extends Controller
{
    public function index()
    {
        return view('markattendance');
    }
    public function adminpage()
    {
        $student = adminn::all();
        return view('adminpage', compact('student'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'student_name' => 'required'
        ]);
        $store = Attendance::where('rollno', $request->student_id);
        $check = $store->count();
        if ($check > 0) {
            $message = "You are already marked your attendance";
            return view('markattendance', compact('message'));
        } else {
            $attendance = new Attendance;
            $attendance->rollno = $request->student_id;
            $attendance->name = $request->student_name;
            $attendance->status = $request->student_status;
            $attendance->save();

            $currenttime = Carbon::now();
            $intime = Carbon::today()->setTimezone('Asia/Karachi')->setHour(8)->setMinute(0)->setSecond(0);
            $latetime = $currenttime->diffforHumans($intime);
            if ($currenttime >= $intime) {
                $message = "You are late for ";
                $third = $message . $latetime;
                return view('markattendance', compact('third'));
            }
        }
    }
    public function login(Request $request)
    {
        $inputone = $request->input('emaill');
        $table = adminn::where('email', $inputone)->first();
        if ($table) {
            $message = "Welcome Maaz Khattak";
            return view('adminpage', ['message' => $message]);
        } else if ($inputone != $request->email) {
            return view('userlayout.dashboard');
        } else {
            return view('login')->with('success', 'Welcome to the user Side!');
        }
    }
}
