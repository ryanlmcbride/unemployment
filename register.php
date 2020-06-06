<?php
require("processRegister.php");
?>
<html>
  <head>
    <title>Register</title>
    <style>
        div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      }
      input[type=text]:focus {
      border: 3px solid rgba(#555555, 0.65);
      }
    </style>
  </head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- Body Starts Here -->
  <body>
    <?php require('navbar.php');?>
    <strong><p class="jumbotron" style="font-size:40px; color: #ffffff; background-color:#96c3ee; text-align:center; font-family:arial;">Register</p></strong>
    <div class="container">
      <div class="row" id="main">
      <form method="POST" align="left">
        <div class="form-group">
          <div class="col-md-6">
          <label for="soc_sec_id"> Social Security Number</label>
          <input type="password" class="form-control" placeholder="SSN" name="soc_sec_id">
          <div class="form-group">
            <label for="dob"> Date of Birth </label>
            <input type="text" class="form-control" placeholder="MM/DD/YYYY" name="dob">
          </div>
        </div>
        <div class="form-group">
          <label for="gender">Gender</label><br>
          <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio" name="gender" value="female">
          <label class="custom-control-label" for="female">Female</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="male">
          <label class="custom-control-label" for="male">Male</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="nbinary">
          <label class="custom-control-label" for="nbinary">Non-binary</label>
        </div>
        </div>
        <div class="form-group">
          <label for="first_name"> First Name </label>
          <input type="text" class="form-control" placeholder="First Name" name="first_name">
        </div>
        <div class="form-group">
          <label for="last_name"> Last Name </label>
          <input type="text" class="form-control" placeholder="Last Name" name="last_name">
        </div>
        <div class="form-group">
          <label for="email"> Email Address </label>
          <input type="text" class="form-control" placeholder="E-mail" name="email">
        </div>
        <div class="form-group">
          <label for="username"> Username </label>
          <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="form-group">
          <label for="password"> Password </label>
          <input type="password"  class="form-control" placeholder="Password" name="password">
        </div>
        <div class="form-group">
          <label for="address"> Address </label>
          <input type="text" class="form-control" placeholder="Address" name="address">
        </div>
        <div class="form-group">
          <label for="city"> City </label>
          <input type="text" class="form-control" placeholder="City" name="city">
        </div>
        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" name="state_id">
            State </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#" name="state1">State 1</a>
              <a class="dropdown-item" href="#" name="state2">State 2</a>
              <a class="dropdown-item" href="#" name="state3">State 3</a>
            </div>
        </div>
        <div class="form-group">
          <label for="zipcode">Zip Code</label>
          <input type="text" class="form-control" placeholder="Zip" name="zipcode">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Register</button>
      </form>
  </div>
  <div class="col-md-3"></div>
  </div>
  </div>
  <?php include('footer.php') ?>
  </body>
</html>
