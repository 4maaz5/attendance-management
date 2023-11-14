@extends('layouts.main')

@section('main')
<div style="width:1100px;margin-left:300px;margin-top:50px;">
<h1 class="text-center" style="margin-top:-850px;margin-left:140px;">Registered Users</h1>
<table class="table table-bordered" style="margin-left: 140px;border:black;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    @if(!empty($student))
    @foreach ($student as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->username }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->password }}</td>
    </tr>
    @endforeach
    @endif

    {{-- <h1 style="color:black;margin-top:30px;">{{ $count }}</h1> --}}
</div>
@endsection

