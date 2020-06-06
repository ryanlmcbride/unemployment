<?php include("processSSN.php"); require("db.php");
  if(isset($_POST["submit"]))
  {
    $ss1=trim($_POST['snn1']);
    $ssn2=trim($_POST['snn2']);
    $ssn3=trim($_POST['snn3']);

    $query="SELECT * FROM "
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Social Security Validation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body>
    <p class="jumbotron" style="font-size:40px; color: #ffffff; background-color:#96c3ee; text-align:center; font-family:arial;">Social Security Validation</p>
    <div class="container">
      <div class="col-md-3"></div>
        <div class="col-md-8">
          <form class="form-inline" action="#" style= "text-align=center;">
            <div class="form-group row">
                <label for="ssn1">Social Security Number: </label>
                <input type="password" class="form-control" name="ssn1" id="number"> -
                <input type="password" class="form-control" name="ssn2" id="number"> -
                <input type="password" class="form-control" name="ssn3" id="number">
              <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </div>
          </form>
        </div>
      <div class="col-md-3"></div>
    </div>
  </body>
</html>
