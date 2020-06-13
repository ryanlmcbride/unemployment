<?php
  include("db.php");
  if(isset($_POST['submit']))
  {
    $SSN = trim($_POST['soc_sec_id']);
    $DOB = trim($_POST['dob']);
    $gender = "";
    $fname = trim($_POST['first_name']);
    $lname = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $uname = trim($_POST['username']);
    $pword = trim($_POST['password']);
    $address = trim($_POST['address']);
    $city = trim($_POST['city']);
    $stateid = "";
    $zip = trim($_POST['zipcode']);

    //check if fields are empty
    if($fname == '')
    {
      echo "<html><br><strong style='color: red;'>You must enter your first name</strong><br></html>";
      die();
    }
    if($lname == '')
    {
      echo "<html><br><strong style='color: red;'>You must enter your last name</strong><br></html>";
      die();
    }
    if($SSN == '')
    {
      echo "<html><br><strong style='color: red;'>You must enter a social security number.</strong><br></html>";
      die();
    }
    if($email == '')
    {
      echo "<html><br><strong style='color: red;'>You must enter your email</strong><br></html>";
      die();
    }
    if($address == '')
    {
      echo "<html><br><strong style='color: red;'>You must enter your address</strong><br></html>";
      die();
    }
    if($city == '')
    {
      echo "<html><br><strong style='color: red;'>You must enter your city</strong><br></html>";
      die();
    }
    if($zip == '')
    {
      echo "<html><br><strong style='color: red;'>You must enter your zipcode</strong><br></html>";
      die();
    }
    if($DOB == '')
    {
      echo "<html><br><strong style='color: red;'>You must enter your date of birth</strong><br></html>";
      die();
    }
    if($pword == '')
    {
      echo "<html><br><strong style='color: red;'>Your must enter your password</strong><br></html>";
      die();
    }
    if(strlen($pword) <= 8)
    {
      echo "<html><br><strong style='color: red;'>Your password should be at least 8 characters long</strong><br></html>";
      die();
    }


    //checks which state option was selected
    if($_POST['stateid'] == "DC")
    {
      $stateid = "DC";
    }
    if($_POST['stateid'] == "MD")
    {
      echo "<html><br><strong style='color: red;'>You are ineligible for DC unemployment</strong><br></html>";
      die();
    }
    if($_POST['stateid'] == "VA")
    {
      echo "<html><br><strong style='color: red;'>You are ineligible for DC unemployment</strong><br></html>";
      die();
    }

    //checks which gender option was selected
    if($_POST['gender'] == "female")
    {
      $gender = "female";
    }
    if($_POST['gender'] == "male")
    {
      $gender = "male";
    }
    if($_POST['gender'] == "nbinary")
    {
      $gender = "nbinary";
    }

    //check SSN
    if(!is_numeric($SSN))
    {
      echo "Please enter a valid social security number";
      die();
    }
    else
    {
      $notIssued1 = range(237, 246);
      $notIssued2 = range(587, 699);
      $notIssued3 = range(750, 772);
      $notIssued4 = range(900, 999);
      $notIssued5 = array(000, 666);
      $notIssuedFull = array_merge($notIssued1, $notIssued2, $notIssued3, $notIssued4, $notIssued5);

      $substr_soc = substr($SSN, 0, 3);
      $social_range = range(577,579);
      if(!in_array($substr_soc, $social_range) || in_array($notIssuedFull))
      {
        echo "Please enter a valid social security number";
        die();
      }
      else
      {
        //process info
        $query = "INSERT into applicants (soc_sec_id, first_name, last_name, email, username, dob, address, city, state_id, zipcode, gender)
        VALUES('$SSN', '$fname', '$lname', '$email', '$uname', '$DOB', '$address', '$city', '$stateid', '$zip', '$gender')";

        $results = mysqli_query($conn, $query);

        //process info second method with extra security
        //$query = "INSERT into applicants (soc_sec_id, first_name, last_name, email, username, dob, address, city, state_id, zipcode, gender)
        //VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        //$preparedStatement = mysqli_prepare($conn, $query);
        //mysqli_stmt_bind_param($preparedStatement, issssssisss, $SSN, $fname, $lname, $email, $uname, $DOB, $address, $city, $stateid, $zip, $gender);
        //msqli_stmt_execute($preparedStatment);
        echo "registration successful!";
        header("Location: home.php");
      }
    }
  }
?>
