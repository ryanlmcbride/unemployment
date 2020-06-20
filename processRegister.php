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
      echo "<div class='alert alert-danger' role='alert'>
        Please enter your first name.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }
    if($lname == '')
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please enter your last name.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }
    if($SSN == '')
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please enter your social security number.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }
    if($email == '')
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please enter your email.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }
    if($address == '')
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please enter your address.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }
    if($city == '')
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please enter your city.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }
    if($zip == '')
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please enter your zip code.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }
    if($DOB == '')
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please enter your date of birth.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }
    if($pword == '')
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please enter a password.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }
    if(strlen($pword) <= 8)
    {
      echo "<div class='alert alert-danger' role='alert'>
        Your password should be at least 8 characters long.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }


    //checks which state option was selected
    if($_POST['stateid'] == "DC")
    {
      $stateid = "DC";
    }
    if($_POST['stateid'] == "MD")
    {
      echo "<div class='alert alert-danger' role='alert'>
        You are ineligible for D.C. unemployment.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }
    if($_POST['stateid'] == "VA")
    {
      echo "<div class='alert alert-danger' role='alert'>
        You are ineligible for D.C. unemployment.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
    }

    //checks which gender option was selected
    if($gender == '')
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please specify your gender.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
    }
    else
    {
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
    }


    //check SSN
    if(!is_numeric($SSN))
    {
      echo "<div class='alert alert-danger' role='alert'>
        Please enter a valid social security number.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
      //die();
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
        echo "<div class='alert alert-danger' role='alert'>
        Please enter a valid social security number.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
        //die();
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
