<html>
  <head>
    <title>Home Page</title>
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
    <?php require('adminNav.php');?>
    <strong><p class="jumbotron" style="font-size:40px; color: #ffffff; background-color:#96c3ee; text-align:center; font-family:arial;">Welcome</p></strong>
    <div class="container">
      <!--<div class="row" id="main">-->
      <form method="POST" align="left">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8">
              <p class="form-group" style="text-align: center;"> As an admin, your job is to manage the accounts and claims of the claimants that are assigned to you. You are assigned claims and users based on their salaries. Approve them or Deny their unemployment requests and you are able to delete users that are assigned to you, but know that you are responsible for their information so before you rid of any information submitted. Please do your best with your assigned claimants to allows them to get the benefits they need.
              </p>
            </div>
            <div class="col-sm-2">
              </p>
            </div>
      </form>
  </div>
  </div>
  <!--</div>-->
  <?php include('footer.php') ?>
  </body>
</html>
