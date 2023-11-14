@extends('layouts.main')
@section('main')
<div class="attendance_form"  style="border:solid 2px;width:650px; height:250px;margin-left:570px;margin-top:-750px;">
    <center><h1>Detailed Reports</h1></center><br>
    <form method="get" action="">
        @csrf
      <label for="student_id">Student ID</label>
      <input type="text" id="student_id" name="idtwo" required>
      <label for="student_id">Student Name</label>
      <input type="text" id="student_id" name="name" required><br><br>
      <label for="student_id">FromDate</label>
      <input type="date" id="student_id" name="fromdate" required style="width:200px;height:30px;margin-left:2px;">
      <label for="student_id" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspToDate</label>
      <input type="date" id="student_id" name="todate" required style="width:200px;height:30px;margin-left:13px;"><br><br>
      <button  class="btn btn-primary" style="margin-left: 80px;">Generate Report</button>
    </form>
    </div><br>
    <div style="width: 640px;margin-left:600px;background-color:beige;">
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Total</th>
                <th>Present</th>
                <th>Absent</th>
                <th>Leave</th>
                <th>Grade</th>
                <th>FromDate</th>
                <th>ToDate</th>
            </thead>
            {{-- @if(!empty($student)) --}}
            @php
            $present=0;
            $Absent=0;
            $Leave=0;
            $total=0;
            $message="";
            @endphp
              @foreach($student as $value)
              @php
                $var=$value->status;
                if ($var=='Present') {
                    $present ++;
                    if ($present >= 25) {
                        $message="A";
                    }
                    elseif ($present >= 20) {
                        $message = "B";
                    }
                    elseif ($present >= 15) {
                        $message = "C";
                    }
                    elseif ($present >= 10) {
                        $message = "D";
                    }
                    else {
                        $message="E";
                    }
                }
                elseif ($var=='Absent') {
                    $Absent ++;
                }
                elseif ($var=='Leave') {
                    $Leave ++;
                }
              @endphp
              <tr>
                <td>{{ $value->rollno }}</td>
                <td>{{ $value->name }}</td>
                <td>30</td>
                <td>{{ $present }}</td>
                <td>{{ $Absent }}</td>
                <td>{{ $Leave }}</td>
                <td>{{ $message }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
            </tr>
              @endforeach
              {{-- @endif --}}

        </table>
@endsection
