@extends('userlayout.dashboard')

@section('content')
<br><br>
<div class="attendance_form"  style="border:solid 2px;width:650px; height:320px;margin-left:180px;">
<center><h1>Mark Student Attendance</h1></center><br>
<form method="post" action="{{ url('/markattendance') }}">
  @csrf
  <label for="student_id">Student ID</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="text" id="student_id" name="student_id" >
  <h6 class="text-danger">
    @error('student_id')
        {{ $message }}
    @enderror
  </h6>
  <label for="student_id">Student Name</label>
  <input type="text" id="student_id" name="student_name"><br><br>
  <h6 class="text-danger">
    @error('student_name')
     {{ $message }}
    @enderror
    </h6>
  <label for="student_id">Student Status</label>
  <input type="text" id="student_id" value="Present" name="student_status" required><br><br>
  <input type="submit" name="mark" value="Mark Attendance" style="margin-left:105px;">
</form>
<br>
<div style="background-color: rgb(33, 238, 101);color:white;">
    @php
    if (!empty($third)) {
        echo $third;
    }
    @endphp
</div>
<div style="background-color: rgb(108, 150, 108);color:white;">
@if (session()->has('status'))
    {{ session('status'); }}
@endif
</div>
<div style="background-color: rgb(108, 150, 108);color:white;">
    @if (session()->has('message'))
        {{ session('message'); }}
    @endif
</div>
<div style="background-color: rgb(108, 150, 108);color:white;">
    @if (session()->has('messag'))
        {{ session('message'); }}
    @endif
</div>
@if(!empty($message))
<div style="background-color: rgb(108, 150, 108);color:white;">
    <h5>{{ $message }}</h5>
</div>
@endif
{{-- {{ $result->rollno }} --}}
</div>
@endsection
