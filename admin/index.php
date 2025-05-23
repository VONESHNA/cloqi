<?php

require_once './header.php';

if (isset($_POST["login"])) {
    $mobnoemail =   Dbops::getinput($_POST["mobnoemail"]);
    $password   =   Dbops::getinput($_POST["password"]);
    $data       =   ['con'=>Con::connect(), 'mobnoemail'=>$mobnoemail, 'password'=>$password];
    if(Dbops::loginMember($data)['n']>0)
    { //print_r(Dbops::loginMember($data)['f']);
        if(Dbops::loginMember($data)['f']['type']==1)
        {   $_SESSION['admin']='Admin';
            echo "<script>
            alert('Success, Looged in');
            window.location='./dashboard.php'
            </script>";
        }
    }else{
        echo "<script>
        alert('Error, Login Credetials mismatch ');
        window.location='./'
        </script>";
    }
}


?>
























































<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
          /**
          * Reinstate scrolling for non-JS clients
          */
          .simplebar-content-wrapper {
            overflow: auto;
          }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>Admin | Login</title>
    
</head>
<body class="">

  <!-- Main Section-->
  <section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

    <!-- Login Form-->
    <div class="d-flex flex-column w-100 align-items-center">

      <!-- Logo-->
      <a href="./index.html" class="d-table mt-5 mb-4 mx-auto">
        <div class="d-flex align-items-center">
            <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg>
            <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">Admin</span>
        </div>      </a>
      <!-- Logo-->
      
      <div class="shadow-lg rounded p-4 p-sm-5 bg-white form">
        <h3 class="fw-bold">Login</h3>
        <p class="text-muted">Welcome back!</p>

        <!-- Login Form-->
        <form class="mt-4" method="post" action=""> 
          <div class="form-group">
            <label class="form-label" for="login-email">Email address</label>
            <input  class="form-control" type="text" name="mobnoemail" placeholder="Enter Mobile No Or Email" required>
          </div>
          <div class="form-group">
            <label for="login-password" class="form-label d-flex justify-content-between align-items-center">
              Password
              <!-- <a href="./forgot-password.html" class="text-muted small ms-2 text-decoration-underline">Forgotten
                password?</a> -->
            </label>
            <input  class="form-control" type="password" name="password" placeholder="Enter Password" required>
          </div>
          <button type="submit" class="btn btn-primary d-block w-100 my-4" name="login" value="1" required>Login</button>

        </form>
        <!-- / Login Form -->

        <!-- <p class="d-block text-center text-muted small">New customer? <a class="text-muted text-decoration-underline"
            href="./register.html">Sign up for an account</a></p> -->
      </div>
    </div>
    <!-- / Login Form-->

  </section>
  <!-- / Main Section-->

  <!-- Theme JS -->
  <!-- Vendor JS -->
  <script src="./assets/js/vendor.bundle.js"></script>
  
  <!-- Theme JS -->
  <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>
