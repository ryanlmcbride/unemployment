<?php  include('db.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    .logo-image{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        margin-top: -3px;
    }
    </style>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="home.php">
    <div class="logo-image">
        <img src="images/unemployment-portal-logo.png" class="img-fluid" alt="">
    </div>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="adminHome.php">Home <span class="sr-only"></span></a>
      </li>
      <?php
      if($loginst!=1){ ?>
      <li class="nav-item">
        <a class="nav-link" href="viewClaims.php">View Claims</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewApplicants.php">View Applicants</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="adminProfile.php">View Account Information</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sign Out</a>
      </li>
    <?php } else{ ?>
        <li class="nav-item">
          <a class="nav-link" href="adminLogin.php">Login/Register</a>
        </li>
      </ul>
    <?php } ?>
    </form>
  </div>
</nav>
  </body>
</html>
