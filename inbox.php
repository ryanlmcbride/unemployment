<?php include('mail.php'); ?>
<html>
    <head><title>Inbox</title></head>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<body>
  <?php include("navbar.php"); ?>
<div class="container">
<strong><p class="jumbotron" style="font-size:40px; color: #ffffff; background-color:#96c3ee; text-align:center; font-family:arial;">Inbox</p></strong>
<div class="container">
<form method="POST">
<div class="row" id="main">
<div class="col-md-2"> </div>
<div class="col-md-8">
    <table style="width:100%">
        <tr>
            <th> Message </th>
        </tr>
        <?php
    while($row=mysqli_fetch_assoc($result)){
  ?>
         <tr>
            <td ><?php echo $row["message"];?></td>
        </tr>
            <?php }?>
    </table>
    </div>
    <div class="col-md-2"> </div>
    </div>
    </div>
    </div>
  </form></div>
        <?php include('footer.php'); ?>
    </body>
</html>
