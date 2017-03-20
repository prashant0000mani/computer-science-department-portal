<?php
if(isset($_COOKIE['status']))
{	
    if($_COOKIE['status']=="admin")
    header("location:adminlogin.php");
    else if($_COOKIE['status']=="fclty")
    header("location:facultylogin.php");
    else if($_COOKIE['status']=="stdnt")
    header("location:studentlogin.php");
    
}
include "header.html";
require "dbconnect.php";
?>
<div class="container">
<nav class="navbar navbar-inverse">
<div class="navbar-header"><a class="navbar-brand">HPGI:</a></div>
<ul class="nav navbar-nav">
<li><a href="#">Home</a></li>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>
<div class="text-center container row">
<div class="col-md-6">
<div class="well">
<div class="well" style="background-color: aqua;"><h2 class="text-primary" style="backface-visibility: visible;"><span class="fa fa-user" fa-lg></span>&nbsp;Enter Username</h2></div>
<form method="post" role="form">
<div class="form-group">
<label>UserName:</label>
<div class="input-group">
<input type="text" name="user" class="form-control" required /><span class="input-group-addon"><i class="fa fa-user-secret fa-lg text-danger"></i></span></div>

</div>
<input type="submit" name="btnuser" class="btn btn-twitter" value="SUBMIT" />

</form>
</div>


</div>





<?php
	if(isset($_POST['btnuser']))
    {
        $userid=$_POST['user'];
        setcookie("user",$userid);
        $qry="select * from login_master where userid='$userid' ;";
        @mysqli_query($link,$qry) or die(mysqli_error($link));
        if(mysqli_affected_rows($link))
        {
            echo '<div class="col-md-6">
<div class="well">
<div class="well" style="background-color: aqua;"><h2 class="text-primary" style="font-family: forte;"><span class="fa fa-user" fa-lg></span>&nbsp;Change Password</h2></div>
<form method="post" role="form">
<div class="form-group">
<label>New Password:</label>
<div class="input-group">
<input type="password" name="pass" class="form-control" required /><span class="input-group-addon"><i class="fa fa-eye fa-lg text-danger"></i></span></div>

</div>
<input type="submit" name="btnpass" class="btn btn-twitter" value="SUBMIT" />

</form>
</div>


</div>';
        }
        else
        echo "<script>alert('User Not Found');</script>";
    }
    
    if(isset($_POST['btnpass']))
    {
      $userid=$_COOKIE['user'];
      $pass=$_POST['pass'];
      $qry="update login_master set password='$pass' where userid='$userid';"  ;
      @mysqli_query($link,$qry) or die(mysqli_error($link));
      if(mysqli_affected_rows($link))
      {
        echo "<script>alert('Password Changed');</script>";
      }
      else
      echo "<script>alert('It is Your Previous Password');</script>";
      
    }
?>
</div>