<?php
    if(isset($_COOKIE['status']))
    { if($_COOKIE['status']=="fclty")
	{include "header.html";
    include "afterloginnavbar.html";
    }
    else if($_COOKIE['status']=="admin")
    header("location:adminlogin.php");
    
    else if($_COOKIE['status']=="stdnt")
    header("location:studentlogin.php");
    
    else 
    header("location:index.php");    
    }
        else 
    header("location:index.php");
?>
<ul class="nav nav-tabs">
  <li class="active"><a href="facultylogin.php">Home</a></li>
  <li><a href="facultyadddetails.php">Add/Edit Details</a></li>
  <li><a href="facultynotice.php">Notice</a></li>
  <li ><a href="facultystudentpage.php">Student Page</a></li>
  <li><a href="facultyuploadebooks.php">Upload E-books</a></li>
  <li><a href="facultynoticeboard.php">Notice Board</a></li>
  <li><a href="facultyeditdeletedetails.php">Edit/Delete Details</a></li>
  </ul>
<?php
echo "Welcome ".$_COOKIE['userid'];

?>
