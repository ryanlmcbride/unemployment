<?php
require("processLogin.php");
?>
<html>
    <head>
        <title>User Login</title>
    </head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <body>
    <strong><p class="jumbotron" style="font-size:40px; color: #ffffff; background-color:#96c3ee; text-align:center; font-family:arial;">Login</p></strong>
    <div class="container">
    <div class="row" id="main">
        <div class="col-md-3"></div>
        <div class="col-md-6">
    <form method="POST" align="left">
        <div class="form-group">
          <label for="soc_sec_id"> Username</label>
          <input type="text" class="form-control" placeholder="" name="uname" required>
        </div>
        <div class="form-group">
          <label for="dob"> Social Security Number</label>
          <input type="password" class="form-control" maxlength="9" placeholder="" name="ssn" required>
        </div>
        <div class="form-group">
          Don't have an account? <a href="register.php">Register Here</a>
        </div>
        <div class="form-group">
          Admin Sign In <a href="adminLogin.php">Here</a>
        </div>
      <div class="form-group"><button type="submit" name="submit" class="btn btn-primary"> Login </button></div>
        </form>
    </div>
    </body>
</html>
