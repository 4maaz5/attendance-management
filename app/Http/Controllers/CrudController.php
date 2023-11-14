<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\leave;

class CrudController extends Controller
{
    public function index()
    {
        $attendance = Attendance::paginate(6);
        // return view('adminattendance');
        return view('adminattendance', compact('attendance'));
    }
    public function show(string $id)
    {
        $show = Attendance::find($id);
        return view('viewdata', ['show' => $show]);
    }
    public function edit(string $id)
    {
        $student = Attendance::find($id);
        return view('edit', ['student' => $student]);
    }
    public function update(Request $request, string $id)
    {
        $student = Attendance::find($id);
        $student->rollno = $request->student_id;
        $student->name = $request->student_name;
        $student->status = $request->student_status;
        $student->save();
        return view('edit', compact('student'));
    }

    public function accept(Request $request, string $id)
    {
        $student = leave::find($id);
        $student->action = "Accepted!";
        $student->save();
        return redirect(route('leaveapproval'));
    }
    public function reject(Request $request, string $id)
    {
        $student = leave::find($id);
        $student->action = "Rejected";
        $student->save();
        return redirect(route('leaveapproval'));
    }
    public function destroy(string $id)
    {
        $student = Attendance::destroy($id);
        return view('adminattendance', compact('student'));
    }
}
