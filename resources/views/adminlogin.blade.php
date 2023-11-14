<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Khattak Academy</title>
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
        <h1 id="name">Attendance Management System <a href="#">Admin Panel</a></h1>

</div>
<br><br>
<!-- End Header -->
<!-- Admin Login Form-->
<div class="container">
      <div class="row justify-content-center align-items-center inner-row">
        <div class="col-md-5">
          <div class="form-box p-5">
            <div class="form-title">
              <h2 class="fw-bold mb-5"><b>Admin Login</b></h2>
            </div>
            <div id="error"></div>
            <form action="{{ url('/adminlogin') }}"  method="post">
                @csrf
              <div class="form-floating mb-3">
                <input type="email" class="form-control form-control-sm" placeholder="UserName"  id="floatingInput" name="email" required="">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control form-control-sm" placeholder="password"  id="floatingPassword" name="password" required="">

                <label for="floatingPassword">Password</label>
              </div>
              <div class="mt-3">
                <input type="submit" class="btn btn-primary text-white" name="adminloginbtn" value="Login">
              </div>
            </form>
            @if(session()->has('success'))
                {{ "Credentials are not matched" }}
            @endif
</body>
</html>
