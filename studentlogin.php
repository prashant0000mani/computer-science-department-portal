
<?php
    if(isset($_COOKIE['status']))
    { if($_COOKIE['status']=="stdnt")
	{include "header.html";
    include "afterloginnavbar.html";
    }
    else if($_COOKIE['status']=="admin")
    header("location:adminlogin.php");
    
    else if($_COOKIE['status']=="fclty")
    header("location:facultylogin.php");
    
    else 
    header("location:index.php");    
    }
        else 
    header("location:index.php");
?>
<ul class="nav nav-tabs">
  <li class="active"><a href="studentlogin.php">Home</a></li>
  <li><a href="studentadddetails.php">Add/Edit Details</a></li>
  <li ><a href="studentresemebuliderpage.php">Resume Builder</a></li>
  <li><a href="studentnoticeboard.php">Notice Board</a></li>
  <li><a href="studentfacultypage.php">Faculty Page</a></li>
  <li><a href="studentebookpage.php">E-book Page</a></li>
  </ul>
<?php
echo "Welcome ".$_COOKIE['userid'];

?>
