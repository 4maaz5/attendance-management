
@extends('layouts.main')
@section('main')
<div class="attendance_form"  style="border:solid 2px;width:650px; height:250px;margin-left:640px;margin-top:-760px;">
<center><h1>Edit Student Attendance</h1></center><br>
<form method="post" action="{{ route('update',$student->id) }}">
    @csrf
    {{-- @method('put'); --}}
  <label for="student_id">Student ID</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="text" id="student_id" name="student_id" value="{{ $student->rollno }}">
  <label for="student_id">Student Name</label>
  <input type="text" id="student_id" name="student_name" required value="{{ $student->name }}"><br><br>
  <label for="student_id">Student Status</label>
  <input type="text" id="student_id" value="Present" name="student_status" required value="{{ $student->status }}"><br><br>
  <input type="submit" class="btn btn-success" value="Update data" style="margin-left:105px;" name="edit">
</form>
</div>
@endsection
