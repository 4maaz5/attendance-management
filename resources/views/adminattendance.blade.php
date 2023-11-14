@extends('layouts.main')
@section('main')
<div style="width:1100px;margin-left:300px;margin-top:10px;">
<h1 class="text-center" style="margin-top: -820px;margin-left:140px;">Attendance Records</h1>
<table class="table table-bordered" style="margin-left: 140px;margin-top:px;background-color:aliceblue;">
    <tr>
        <th>ID</th>
        <th>RollNo</th>
        <th>Name</th>
        <th>Status</th>
        <th>Actions</th>
        <th>Added Column</th>
    </tr>
    @if(!empty($attendance))
    @foreach ($attendance as $value)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $value->rollno }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->status }}</td>
            <td><a href="{{ url('/viewdata',$value->id) }}"><button class="btn btn-primary">View</button></a>&nbsp<a href="{{ url('/edit',$value->id) }}"><button class="btn btn-secondary">Edit</button></a>&nbsp<a href="{{ url('/delete',$value->id) }}"><button class="btn btn-danger">Trash</button></a></td>
            <td>{{ $value->fullName }}</td>
            <td>{{ $value->New }}</td>
            @endforeach
        </tr>
</table>
</div>
<div style="margin-left:440px;">{{ $attendance->links() }}</div>
@endif
@endsection
