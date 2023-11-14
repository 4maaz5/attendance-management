@extends('userlayout.dashboard')
@section('content')
<br><br>
<div class="form" style="margin-left:500px;">
    <br><br>
    <center><h1>Leave Application Form</h1></center><hr>
    <center><h5 style="background-color: rgb(95, 165, 95);color:aliceblue;">
    @if (session()->has('message'))
        {{ session('message') }}
    @endif
    </h5></center>
    <form method="post" action="{{ url('/markleave') }}">
      @csrf
        <input type="text" class="form-control" placeholder="FirstName" id="input" name="fname" >
        <h6 class="text-danger" style="margin-left: 50px;">
          @error('fname')
              {{ $message }}
          @enderror
        </h6>
        <input type="text" class="form-control" placeholder="LastName" id="input1" name="lname" style="margin-top: -45px;"><br>
        <input type="text" class="form-control" placeholder="JobTitle" id="input2" name="jobtitle" >
        <input type="number" class="form-control" placeholder="phone" id="input3" name="number" ><br>
        <input type="email" class="form-control" placeholder="email" id="input4" name="email" ><br>
        <h6 class="text-danger" style="margin-left: 50px;">
          @error('email')
           {{ $message }}
          @enderror
        </h6>
        <h4>Reason</h4>
        <textarea id="input5" name="reason" ></textarea>
        <h6 class="text-danger" style="margin-left: 50px;">
          @error('reason')
           {{ $message }}
          @enderror
        </h6>
        <input type="date" class="form-control" placeholder="LastName" id="input6" name="date" ><br>
        <input type="submit" class="btn btn-primary" name="submit" placeholder="LastName" id="submit">
</div>
        <br><br><br><br><br><hr>
        <h1 class="text-center">Leave Application History</h1>
       <table class="table table-bordered">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>JobTitle</th>
          <th>Reason</th>
          <th>Date</th>
          <th>Response</th>
        </tr>
        @foreach ($leave as $item)
        <tr>
            <td>{{ $item -> fname }}</td>
            <td>{{ $item -> email }}</td>
            <td>{{ $item -> jobtitle }}</td>
            <td>{{ $item -> reason }}</td>
            <td>{{ $item -> date }}</td>
            <td>{{ $item -> action }}</td>
        @endforeach
        </tr>
<br><br>
@endsection
