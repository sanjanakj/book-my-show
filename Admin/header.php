<?php
session_start();
if(!isset($_SESSION['userName'])){
  header("Location: login.php");
}


?>


<!DOCTYPE html>
<html>
<head>
  <title>BOOK MY SHOW</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="../css/bootstrap-reboot.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">BOOK MY SHOW</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="">Sign out</a>
    </li>
  </ul>
</nav>
<br>
<br>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <i class="fa fa-dashboard"></i>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-video-camera"></i>
              Movies 
            </a>
          </li>
        </ul>

      </div>
    </nav>