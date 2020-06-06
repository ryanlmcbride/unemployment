<?php
  include("db.php");
  if(isset($_POST['submit']))
  {
    $SSN = trim($_POST['soc_sec_id']);
    $fullSSN = $SSN . trim($_POST['ssn2']);
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

    //invalid SSN's
    $notIssued1 = range(237, 246);
    $notIssued2 = range(587, 699);
    $notIssued3 = range(750, 772);
    $notIssued4 = range(900, 999);
    $notIssued5 = array(000, 666);
    $notIssuedFull = array_merge($notIssued1, $notIssued2, $notIssued3, $notIssued4, $notIssued5);

    if(empty($fname)||empty($lname)||empty($email)||empty($SSN)||empty($uname)||empty($pword)||empty($address)||empty($city||empty($stateid)||empty($zip)||empty($DOB)))
    {
      echo "<html><br><strong style='color: red;'>All fields are required</strong><br></html>";
    }

    if(!is_numeric($SSN) || strlen($SSN) != 9)
    {
      echo "<html><br><strong style='color: red;'>Invalid SSN</strong><br></html>";
    }

    if(strlen($pword) <= 8)
    {
      echo "<html><br><strong style='color: red;'>Your password should be at least 8 characters long</strong><br></html>";
    }

    if(!preg_match('/[A-Za-z]/', $pword) && !preg_match('/[0-9]/', $pword))
    {
      echo "<html><br><strong style='color: red;'>Your password must have letters AND numbers</strong><br></html>";
    }

    //checks which state option was selected
    if($_POST['state'] == "DC")
    {
      $stateid = "DC";
    }
    if($_POST['state'] == "MD")
    {
      echo "<html><br><strong style='color: red;'>You are ineligible for DC unemployment</strong><br></html>";
    }
    if($_POST['state'] == "VA")
    {
      echo "<html><br><strong style='color: red;'>You are ineligible for DC unemployment</strong><br></html>";
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
    if(in_array($SSN, $notIssuedFull))
    {
      echo "<html><br><strong style='color: red;'>Invalid SSN</strong><br></html>";
    }
    else{
      $query = "INSERT into applicants soc_sec_id, first_name, last_name, email, username, dob, address, city, state_id, zipcode, gender
      values('$fullSSN', '$fname', '$lname', '$email', '$uname', '$DOB', '$address', '$city', '$stateid', '$zip', '$gender')";

      $results = mysqli_query($conn, $query);

      /*
      if(mysqli_num_rows($results) == 0)
      {
        echo "Invalid D.C. SSN";
      }
      */
    }
  }
?>
