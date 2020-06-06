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
    $state=trim($_POST["state"]);
    $zip=trim($_POST["e_zip"]);
    $email=trim($_POST["e_email"]);
    $phone=trim($_POST["e_phone"]);
    $salary=trim($_POST["salary"]);

    $query=myqli_query("INSERT INTO claims WHERE last_date_of_employment='$SSN' AND employer_name='' and department='$department' and employer_address='$address' employer_state_id='$state' employer_zip_code='$zip' employer_city='$city' employer_email='$email' employer_phone='$phone' salary='$salary' applicant_soc_sec='soc_sec_id' application_status='' open admin_id=''");
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
