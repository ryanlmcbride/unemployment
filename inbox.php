<?php include('mail.php'); ?>
<html>
    <head><title>Form</title></head>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <body>
      <?php require("navbar.php");?>
    <div class="container">
    <p class="jumbotron" style="font-size:40px; background-color:#96c3ee; text-align:center;">Welcome !!</p>
    <div class="row" id="main">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <form name="message" action="mail.php">
                <table class="table">
                    <tr>
                        <th>To:</th>
                        <td>
                            <input type="text" name="sendToAddress" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Message:</th>
                        <td>
                            <input type="text" name="message" value="" class="form-control" style="height:200px; width:300px"/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <button class="btn btn-primary"> Send</buttton>
                        </th>
                        <td></td>
                    </tr>
                </table>
              </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>
