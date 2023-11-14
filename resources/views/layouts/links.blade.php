<!DOCTYPE html>
<html lang="en">

<html>
    <head>
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name') }}</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

  <!-- JS, Popper.js, and jQuery (optional) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    </head>
<body>

    <div class="container">
        <div class=" row" id="namee" style="width: 1770px;margin-left: -240px;">
            <h1 id="name"><img src="{{ asset('assets/images/logo.jpeg') }}" style="width:70px;margin-top:-5px;">&nbsp&nbspAttendance Management System <a href="adminlogin.php" id="admin" style="margin-left:750px;"style="margin-left:460px;">Logout</a></h1>
            <h5 style="margin-left:330px;margin-top:20px;"><b>Dashboard || Attendance &nbsp&nbsp </b></h5>
        </div>
        @include('layouts.sidebar')
    </div>
