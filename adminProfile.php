<html>
  <head>
    <title>Admin Profile</title>
    <style>
      div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
      input[type=text]:focus {
        border: 3px solid rgba(#555555, 0.65);
      }


      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
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
    <strong><p class="jumbotron" style="font-size:40px; color: #ffffff; background-color:#96c3ee; text-align:center; font-family:arial;">Admin Info</p></strong>

    <?php
      $query = "Select * from admin";
      $result = mysqli_query($conn, $query);
      ?>
    <table>
      <tr>
        <th>Employee ID</th>
        <th>Level</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>

      <?php
      while ($row = mysqli_fetch_assoc($result))
      {
        ?>
      <tr>
        <td><?php echo $row["employee_id"];?></td>
        <td><?php echo $row["level"];?></td>
        <td><?php echo $row["first_name"];?></td>
        <td><?php echo $row["last_name"];?></td>
      </tr>
        <?php
      }?>
    </table>
  <!--</div>-->
  <?php include('footer.php') ?>
  </body>
</html>
