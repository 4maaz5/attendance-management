<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSS only -->
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

         <!-- JS, Popper.js, and jQuery (optional) -->
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    </head>
    <body>

        <div class="container">
            <div class=" row" id="namee">
                <h1 id="name"><img src="assets/images/logo.jpeg" style="width:70px;margin-top:-5px;">&nbspAttendance Management System </h1>
                <div style="margin-top:-40px;margin-left:500px;">
             <a href="{{ url('/dashboard') }}" style="text-decoration:none; font-size:20px;color:black;margin-left:350px;margin-top:150px;"><b>Home</b></a>&nbsp&nbsp
             <a href="{{ url('/markattendance') }}" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Attendance</b></a>&nbsp&nbsp
             <a href="{{ url('/markleave') }}" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Leave</b></a>&nbsp&nbsp
             <a href="{{ route('viewrecord') }}" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Record</b></a> &nbsp&nbsp
             <a href="{{ url('/login') }}" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;margin-left:30px;border:solid 2px;padding:5px;"><b>Admin panel</b></a> &nbsp&nbsp
        </div>
        </div>
        {{-- <h1 style="font-family:sans-serif;background-color:rgb(133, 184, 150);border:solid 4px white;margin-top:10px;" class="text-center">{{ $success }}</h1>
        <!-- End Header --> --}}
            </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
