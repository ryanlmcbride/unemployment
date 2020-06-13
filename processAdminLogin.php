<?php
$loginst = 0;
if(isset($_POST["submit"]))
{
    include("db.php");
    $username = trim($_POST['uname']);
    $password = trim($_POST ['pword']);
    $query = "SELECT * FROM admin WHERE username= '$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    $ses_sql = mysqli_query($conn,"SELECT username FROM admin WHERE username='$username' ");

    $row=mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_user=$row['username'];

    if(!empty($username))
    {
       $loginst = 1;
    }
    if($count>0) {
        session_start();
        $_SESSION['username']= $row['username'];
        header('location:home.php');
    }
    else {
        echo 'Username and Password do not match';
    }
}
?>
