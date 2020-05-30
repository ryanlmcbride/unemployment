<html>
  <head>
    <title>Application</title>
    <style>
    </style>
  </head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- Body Starts Here -->
  <body>
    <div class="container">
      <strong><p class="jumbotron" style="font-size:40px; color: #ffffff; background-color:#96c3ee; text-align:center; font-family:arial;">Register</p></strong>
      <div class="row" id="main">
        <div class="col-md-1"></div>
        <div class="col-md-1">
      <form method="POST" class="form-horizontal" action="#">
        <div class="form-group">
          <label for="soc_sec_id"> Social Security Number</label>
          <div class="col-sm-10">
          <input type="password" class="form-control" placeholder="SSN" name="soc_sec_id">
        </div>
        </div>
        <div class="form-group">
          <label for="first_name"> First Name </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="First Name" name="first_name">
        </div>
        </div>
        <div class="form-group">
          <label for="last_name"> Last Name </label>
          <input type="text" class="form-control" placeholder="Last Name" name="last_name">
        <div>
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
          <label for="dob"> Date of Birth </label>
          <input type="text" class="form-control" placeholder="MM/DD/YY" name="dob">
        </div>
        <div class="form-group">
          <label for="address"> Address </label>
          <input type="text" class="form-control" placeholder="Address" name="address">
        </div>
        <div class="form-group">
          <label for="city"> City </label>
          <input type="text" class="form-control" placeholder="City" name="city">
        </div>
        <div class="form-group">
          <label for="state_id"> State </label>
          <input type="text" class="form-control" placeholder="State" name="state_id">
        </div>
        <div class="form-group">
          <label for="zipcode">Zip Code</label>
          <input type="text" class="form-control" placeholder="Zip" name="zipcode">
        </div>
        <div class="form-group">
          <label for="dob">Gender</label>
          <input type="text" class="form-control" placeholder="Gender" name="gender">
        </div>

        <button type="submit" name="submit">Register</button>
      </form>
  </div>
  <div class="col-md-2"></div>
  </div>
  </div>
  </body>
</html>
