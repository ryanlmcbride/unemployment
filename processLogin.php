<?php
if(isset($_POST["submit"])){
    include "db.php";
    $ssn=trim($_POST['ssn']);
    $username=trim($_POST ['uname']);
    $query = "SELECT * FROM applicants WHERE username= '$username' AND soc_sec_id='$ssn'";
    $result = mysqli_query($conn, $query);
    $row= mysqli_fetch_assoc($result);
    $count= mysqli_num_rows($result);

if($count>0) {
    session_start();
    $_SESSION['username']= $row['username'];
    header('location:index.php');
}
else {
    echo 'Username and Password do not match';
}
}
?>