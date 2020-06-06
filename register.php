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

      .inline-block{
        display: inline-block;
        width: 100px;
        height: 100px;
        padding: 5px;
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
    <?php //require('navbar.php');?>
    <strong><p class="jumbotron" style="font-size:40px; color: #ffffff; background-color:#96c3ee; text-align:center; font-family:arial;">Register</p></strong>
    <div class="container-fluid">
      <form method="POST">
      Back to Login <a href="login.php">Here</a>
      <div class="row" id="main">
          <div class="col-sm-6">
            <div class="form-group row">
              <div class="col-xs-2">
                <label for="soc_sec_id"> Social Security Number (First Three Digits)</label>
                <input type="password" maxlength="3" class="form-control" placeholder="first 3 digits of ssn" name="soc_sec_id">
              </div>
            </div>
            <div class="form-group">
              <label for="gender">Gender</label><br>
              <div class="inline-block">
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
              </div>
              <div class="inline-block">
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
              </div>
              <div class="inline-block">
                <input type="radio" id="nbinary" name="gender" value="nbinary">
                <label for="other">Non-binary</label>
              </div>
            </div>
            <div class="form-group">
              <label for="first_name"> First Name </label>
              <input type="text" class="form-control" placeholder="First Name" name="first_name">
            </div>
            <div class="form-group">
              <label for="email"> Email Address </label>
              <input type="text" class="form-control" placeholder="E-mail" name="email">
            </div>
            <div class="form-group">
              <label for="password"> Password </label>
              <input type="password"  class="form-control" placeholder="Password" name="password">
            </div>
            <div class="form-group row">
              <div class="col-xs-2">
                <label for="city"> City </label>
                <input type="text" class="form-control" placeholder="City" name="city">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-2">
                <label for="zipcode">Zip Code</label>
                <input type="text" class="form-control" placeholder="Zip" name="zipcode">
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Register</button>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="ssn2"> Social Security Number (remaining numbers)</label>
              <input type="password" maxlength="6" class="form-control" placeholder="remaining numbers of ssn" name="ssn2">
            </div>
            <div class="form-group row">
              <div class="col-xs-2">
                <label for="dob"> Date of Birth </label>
                <input type="text" class="form-control" placeholder="MM/DD/YYYY" name="dob"><br><br><br>
              </div>
            </div>
            <div class="form-group">
              <label for="last_name"> Last Name </label>
              <input type="text" class="form-control" placeholder="Last Name" name="last_name">
            </div>
            <div class="form-group">
              <label for="username"> Username </label>
              <input type="text" class="form-control" placeholder="Username" name="username">
            </div>
            <div class="form-group">
              <label for="address"> Address </label>
              <input type="text" class="form-control" placeholder="Address" name="address">
            </div>
            <div class="form-group">
              <label for="stateid">State: </label>
              <select name="stateid" id="stateid">
                <option value="0">D.C.</option>
                <option value="1">Maryland</option>
                <option value="2">Virigina</option>
                <option value="3">Outside the DMV</option>
              </select>
            </div>
            </div>
          </div>
      </form>
    </div>
  <?php include('footer.php') ?>
  </body>
</html>
