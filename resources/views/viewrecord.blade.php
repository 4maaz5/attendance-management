@extends('userlayout.dashboard')

@section('content')
<br><br>
<div class="attendance_form"  style="border:solid 2px;width:650px; height:250px;margin-left:500px;">
<center><h1>Mark Student Attendance</h1></center><br>
<form method="get" action="">
  @csrf
  <label for="student_id">Student ID</label>
  <input type="text" id="student_id" name="search_value" required>
  <label for="student_id">Student Name</label>
  <input type="text" id="student_id" name="student_name" required><br><br>
  <input type="submit" value="Show Attendance" name="submit" style="margin-left:77px;width:190px;">
</form>
</div>
<br>
<h1 class="text-center" style="margin-top: 450px;">Attendance Records</h1>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>RollNo</th>
        <th>Status</th>
    </tr>


@foreach ($result as $result)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $result->name }}</td>
    <td>{{ $result->rollno }}</td>
    <td>{{ $result->status }}</td>
@endforeach
</tr>
</table>
@endsection

