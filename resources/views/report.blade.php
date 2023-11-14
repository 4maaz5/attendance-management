@extends('layouts.main')
@section('main')

<div class="attendance_form"  style="border:solid 2px;width:650px; height:250px;margin-left:470px;margin-top:-760px;">
<center><h1>Attendance Report</h1></center><br>
<form method="get" action="">
    @csrf
  <label for="student_id">Student ID</label>
  <input type="text" id="student_id" name="id" required>
  <label for="student_id">Student Name</label>
  <input type="text" id="student_id" name="name" required><br><br>
  <label for="student_id">FromDate</label>
  <input type="date" id="student_id" name="from" required style="width:200px;height:30px;margin-left:2px;">
  <label for="student_id" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspToDate</label>
  <input type="date" id="student_id" name="to" required style="width:200px;height:30px;margin-left:13px;"><br><br>
  <button  style="margin-left:77px;width:200px;">Generate Report</button>
</form>
</div><br>
<table class="table table-bordered" style="width: 400px;margin-left:590px;background-color:aliceblue">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Status</th>
        <th>FromDate</th>
        <th>ToDate</th>
    </tr>
    @foreach($student as $item)
        <tr>
            <td>{{ $item->rollno }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
    @endforeach
        </tr>
</table>
@endsection

