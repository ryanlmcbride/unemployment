<?php
include ('db.php');
//$adminID=$_session['adminID'];
$adminID="1";
$query= "SELECT a.first_name, a.last_name, a.email, c.employer_name FROM 'applicants' AS a INNER JOIN 'claims' AS c ON a.soc_sec_id= c.applicant_soc_sec AND c.admin_id='$adminID'";
$result=mysqli_query($conn,$query);
?>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
      <?php include("adminNav.php"); ?>
    <div class="container">
    <strong><p class="jumbotron" style="font-size:40px; color: #ffffff; background-color:#96c3ee; text-align:center; font-family:arial;">Applicants</p></strong>
    <div class="row" id="main">
    <div class="col-md-2"> </div>
    <div class="col-md-8">
        <table style="width:100%">
            <tr>
                <th>Name </th>
                <th>Email</th>
                <th>Former Employer</th>
            </tr>
            <?php
				while($row=mysqli_fetch_assoc($result)){
			?>
             <tr>
                <td ><?php echo $row["first_name"] . $row["last_name"] ;?></td>
                <td ><?php echo $row["email"];?></td>
                <td ><?php echo $row["employer_name"];?></td>
                <td><button type="submit" name="delete" class="btn btn-danger"> Delete </button></td>
            </tr>
                <?php }?>
        </table>
        </div>
        <div class="col-md-2"> </div>
        </div>


        </div>
        </div>
    </body>
</html>
