<?php
  require("db.php");
  if(isset($_POST['submit']))
  {
    $SSN = trim($_POST['soc_sec_id']);
    $DOB = trim($_POST['dob']);
    //$gender = $_POST['gender'];
    $fname = trim($_POST['first_name']);
    $lname = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $uname = trim($_POST['username']);
    $pword = trim($_POST['password']);
    $address = trim($_POST['address']);
    $city = trim($_POST['city']);
    //$stateid = trim($_POST['state_id']);
    $zip = trim($_POST['zipcode']);

    if(empty($fname)||empty($lname)||empty($email)||empty($SSN)||empty($uname)||empty($pword)||empty($address)||empty($city||empty($stateid)||empty($zip)||empty($DOB)))
    {
      echo "<html><strong style='color: red;'>All fields are required</strong></html>";
    }
    else if(!is_numeric($SSN) || strlen($SSN) != 9)
    {
      echo "Invalid SSN";
    }
    else if(strlen($pword) <= 8)
    {
      echo "<html><strong style='color: red;'>Your password should be at least 8 characters long</strong></html>";
    }
    else if(!preg_match('/[A-Za-z]/', $pword) && !preg_match('/[0-9]/', $pword))
    {
      echo "<html><strong style='color: red;'>Your password must have letters AND numbers</strong></html>";
    }
    else{
      $query = "INSERT into applicants soc_sec_id, first_name, last_name, email, username, dob, address, city, state_id, zipcode, gender
      values('$SSN', '$fname', '$lname', '$email', '$uname', '$DOB', '$address', '$city', '$stateid', '$zip', '$gender')";

      $results = mysqli_query($conn, $query);
    }
  }
?>
