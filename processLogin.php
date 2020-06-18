<?php
$loginst = 0;
if(isset($_POST["submit"]))
{
    include("db.php");
    $ssn=trim($_POST['ssn']);
    $username=trim($_POST ['uname']);
    $query = "SELECT * FROM applicants WHERE username= '$username' AND soc_sec_id='$ssn'";
    $result = mysqli_query($conn, $query);
    $row= mysqli_fetch_assoc($result);
    $count= mysqli_num_rows($result);
    $ses_sql = mysqli_query($conn,"SELECT username FROM applicants WHERE username='$username'");

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
    echo '"<div class="alert alert-danger" role="alert">
      Login credentials are incorrect
        <!--Close button on alert-->
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
              </button>
                </div>"';
}
}
?>
