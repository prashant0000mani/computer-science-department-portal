<?php
    if(isset($_COOKIE['status']))
    { if($_COOKIE['status']=="admin")
	{include "header.html";
    include "afterloginnavbar.html";
    }
    else if($_COOKIE['status']=="fclty")
    header("location:facultylogin.php");
    
    else if($_COOKIE['status']=="stdnt")
    header("location:studentlogin.php");
    
    else 
    header("location:index.php");    
    }
        else 
    header("location:index.php");
?>
<ul class="nav nav-tabs">
  <li class="active"><a href="adminlogin.php">Home</a></li>
  <li><a href="adminadddetails.php">Add Details</a></li>
  <li ><a href="admineditdetails.php">Edit Details</a></li>
  <li><a href="adminuploadnotice.php">Upload Notice</a></li>
  <li><a href="admineditnotice.php">Edit Notice</a></li>
  </ul>
<?php
echo "Welcome ".$_COOKIE['userid'];

?>

