<?php
require("db.php");
  if(isset($_POST["submit"]))
  {
    require('db.php');
    $SSN=trim($_POST["soc_sec_id"]);
    $date=trim($_POST["date"]);
    $company=trim($_POST["f_company"]);
    $department=trim($_POST["f_department"]);
    $address=trim($_POST["f_address"]);
    $city=trim($_POST["city"]);
    $state=trim($_POST["stateid"]);
    $zip=trim($_POST["e_zip"]);
    $email=trim($_POST["e_email"]);
    $phone=trim($_POST["e_phone"]);
    $salary=trim($_POST["salary"]);

    //invalid SSN's
    $notIssued1 = range(237, 246);
    $notIssued2 = range(587, 699);
    $notIssued3 = range(750, 772);
    $notIssued4 = range(900, 999);
    $notIssued5 = array(000, 666);
    $notIssuedFull = array_merge($notIssued1, $notIssued2, $notIssued3, $notIssued4, $notIssued5);

    //checks if fields are empty
    if(empty($date)||empty($company)||empty($email)||empty($SSN)||empty($department)||empty($address)||empty($salary)||empty($city)||empty($state)||empty($zip)||empty($phone))
    {
      echo "<html><br><strong style='color: red;'>All fields are required</strong><br></html>";
    }

    if(!is_numeric($SSN) || strlen($SSN) != 9)
    {
      echo "<html><br><strong style='color: red;'>Invalid SSN</strong><br></html>";
    }

    $query=mysqli_query("INSERT INTO claims WHERE last_date_of_employment='$date' AND employer_name='$company' and department='$department' and employer_address='$address' employer_state_id='$state' employer_zip_code='$zip' employer_city='$city' employer_email='$email' employer_phone='$phone' salary='$salary' applicant_soc_sec='$SSN' application_status='Pending' open='Y'");
    if($salary>=75000){
      
    }
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
      session_start();
      $_SESSION['soc_sec_id']= $row['soc_sec_id'];
      $_SESSION['date']= $row['date'];
      $_SESSION['f_company']= $row['f_company'];
      $_SESSION['f_department']= $row['f_department'];
      $_SESSION['f_address']= $row['f_address'];
      $_SESSION['city']= $row['city'];
      $_SESSION['state']= $row['state'];
      $_SESSION['e_zip']= $row['e_zip'];
      $_SESSION['e_email']= $row['e_email'];
      $_SESSION['e_phone']= $row['e_phone'];
      $_SESSION['salary']= $row['salary'];
      echo("Your claim has been successfully filed");
      header('location:home.php');
    }
    else {
      echo 'Claim could not be filed';
    }
  }
 ?>
