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
?>
<div class="container">
<nav class="navbar navbar-inverse">
<div class="navbar-header"><a class="navbar-brand">HPGI:</a></div>
<ul class="nav navbar-nav">
<li><a href="index.php">Home</a></li>
<li><a href="aboutus.php">About Me</a></li>
<li><a href="contactme.php">Contact Me</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li style="display: inline; margin-top: 8px;"><table><tr><td><form method="post" role="form"><label style="color: white;">Username:</label></td><td><input type="text" name="user" class="form-control input-sm" required />
</td><td><label style="color: white;">&nbsp;Password:</label></td><td><input type="password" name="pass" class="form-control input-sm" autocomplete="off" required /></td><td>&nbsp;<input type="submit" name="btnsubmit" value="Login" class=" btn btn-google" /></td></tr>
<tr><td colspan="3"><div class="checkbox-inline" style="text-align:left">
<label style="color: white;"><input type="checkbox" name="rememberme" />&nbsp;Remember Me</label></div></td><td><a href="forgotpassword.php" style="color:#FFFFFF"><span class="fa fa-refresh fa-lg" style="color: white;"></span> &nbsp;Forgot Password</a></td></tr></form></table></li>
</ul>
</nav></div>
<?php
include "carousel.html";
echo "<br>";
include "random.html";
echo "<br>";
require "dbconnect.php";
    if(isset($_POST['btnsubmit']))
    { 
      
        $user=$_POST['user'];
        $pwd=$_POST['pass'];
        $qry="select status from login_master where userid='$user' and password='$pwd';";
        $result=@mysqli_query($link, $qry) or die(mysqli_error($link));
        if($row=mysqli_fetch_row($result))
        { 
            if($row[0]=="admin")
            {   if(isset($_POST['rememberme']))
                {
                    setcookie("userid",$user,time()+60*60);
                    setcookie("status","admin",time()+60*60);
                    
                }
                else
                { 
                    setcookie("userid",$user);
                    setcookie("status","admin"); 
                }
                header("location:adminlogin.php");
            }
            else if($row[0]=="fclty")
            {   if(isset($_POST['rememberme']))
                {
                    setcookie("userid",$user,time()+60*60);
                    setcookie("status","fclty",time()+60*60);
                    
                }
                else
                {   setcookie("userid",$user);
                   setcookie("status","fclty"); 
                }
                header("location:facultylogin.php");
            }
           else if($row[0]=="stdnt")
            {   if(isset($_POST['rememberme']))
                {
                    setcookie("userid",$user,time()+60*60);
                    setcookie("status","stdnt",time()+60*60);
                    
                }
                else
                {
                   setcookie("userid",$user);
                   setcookie("status","stdnt"); 
                }
                header("location:studentlogin.php");
            }
            
        
    
            }
            else
        echo "<script>alert('Invalid Username or Password');</script>";
        }
?>

