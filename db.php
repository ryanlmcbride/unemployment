<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $schema = "dc_covid_19";
 // $schema = "covid-19";
  $conn = mysqli_connect($servername, $username, $password, $schema);

  if($conn == false)
  {
    echo "connection failed";
  }
  /*else {
    echo "connection successful";
  }*/
?>
