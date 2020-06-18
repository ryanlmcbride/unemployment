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
    <?php require('navbar.php');?>
    <strong><p class="jumbotron" style="font-size:40px; color: #ffffff; background-color:#96c3ee; text-align:center; font-family:arial;">Welcome</p></strong>
    <div class="container">
    <img src="https://www.wistv.com/resizer/AOWzI7GoVCIOUvlAZIQvHSHTezw=/1200x600/arc-anglerfish-arc2-prod-raycom.s3.amazonaws.com/public/7XY7CNV5ZJF4PF5TJ7I4GWVJTI.jpg" style="width:925px; height: 200px; padding-left: 10px;">
      <!--<div class="row" id="main">-->
      <form method="POST" align="left">
        <div class="form-group">
          <div class="row">
          <div class="col-sm-1"></div>
            <div class="col-sm-5">
              <p>
                Unemployment is defined as the state of someone who doesn’t have a job. It is something society is suffering from right now, especially with the coronavirus (COVID-19), the whole country is under quarantine restrictions and regulations. With the pandemic, many jobs have unfortunately laid off employees due to the stay at home orders, leaving many people without money to adhear to basic necessities.
              </p>

            </div>

            <span class="border-right"></span>
            <div class="col-sm-5">

              <p> Unemployment affects everyone, whether you are self-employed or just a regular employee. In the United States, the government uses surveys, census counts...etc to track unemployment. Tracking unemployment is very important because we need to know what we need to fix in out country. Without being able to track unemployment we wouldnt be able to know how many jobs we need to create.</p>
            </div>
            </div>
            <hr>
            <p>Our goal as the District of Columbia (D.C.) Unemployment Portal is to provide you with a simple way to provide you with unemployment benefits. We want to stress that if you are not from the D.C. area, you will not be eligible for these specific benefits. Please redirect yourself to your state's unemployment portal. Please stay safe during this time, thank you.</p>
      </form>
  </div>
  </div>
  <!--</div>-->
  <?php include('footer.php') ?>
  </body>
</html>
