<?php include('db.php'); include('processClaim.php'); ?>
<html>
  <head>
    <title>Application</title>
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
    <div class="container">
      <strong><p class="jumbotron" style="font-size:40px; color: #ffffff; background-color:#96c3ee; text-align:center; font-family:arial;">File Your Claim</p></strong>
      <form method="POST" class="form-horizontal" action="#">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="form-group row">
              <label for="soc_sec_id"> Social Security Number</label>
              <div class="col-sm-10">
                <input type="password" maxlength="9" class="form-control" placeholder="SSN" name="soc_sec_id">
              </div>
            </div>
            <div class="form-group">
              <label for="date">Last Date of Employment</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="MM/DD/YYYY" name="date">
              </div>
            </div>
            <div class="form-group">
              <label for="f_company">Former Employer/Company</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Former Employer/Company Name" name="f_company">
              </div>
            </div>
            <div class="form-group">
              <label for="f_department">Former Department</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Former Employer Department" name="f_department">
              </div>
            </div>
            <div class="form-group">
              <label for="f_address">Former Company Address</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Former Employer Address" name="f_address">
              </div>
            </div>
            <div class="form-group">
              <label for="city">Company City</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="City" name="city">
              </div>
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
            <div class="form-group">
              <label for="e_zip">Zip Code</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" placeholder="ZIP" name="e_zip">
              </div>
            </div>
            <div class="form-group">
              <label for="e_email">Employer Email</label>
              <div class="col-sm-10">
                <input type="email"  class="form-control" placeholder="email@gmail.com" name="e_email">
              </div>
            </div>
            <div class="form-group">
              <label for="e_phone">Employer Phone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="000-000-0000" name="e_phone">
              </div>
            </div>
            <div class="form-group">
              <label for="salary">Previous Annual Salary</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="$" name="salary">
              </div>
            </div>
            <div class="form-group">
              <button type="submit" name="submitC" class="btn btn-primary">Submit Claim</button>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </form>
  </div>
  <?php include('footer.php'); ?>
  </body>
</html>
