<?php
$loginst = 0;
if(isset($_POST["submit"]))
{
    include("db.php");
    $employeeId=trim($_POST['employee_id']);
    $password=trim($_POST['pWord']);
    $query = "SELECT * FROM admin WHERE employee_id='$employeeId' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $row= mysqli_fetch_assoc($result);
    $count= mysqli_num_rows($result);
    $ses_sql = mysqli_query($conn,"SELECT employee_id FROM admin WHERE employee_id='$employeeId'");

    $row=mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_user=$row['employee_id'];

    if(!empty($employeeId))
    {
       $loginst = 1;
    }
if($count>0) {
    session_start();
    $_SESSION['employee_id']= $row['employee_id'];
    header('location:adminHome.php');
}
else {
    echo 'Login credentials do not match';
  }
}
?>
