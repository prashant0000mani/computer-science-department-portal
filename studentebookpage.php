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
    
    require "dbconnect.php";
?>
<ul class="nav nav-tabs">
  <li><a href="studentlogin.php">Home</a></li>
  <li><a href="studentadddetails.php">Add/Edit Details</a></li>
  <li ><a href="studentresemebuliderpage.php">Resume Builder</a></li>
  <li><a href="studentnoticeboard.php">Notice Board</a></li>
  <li><a href="studentfacultypage.php">Faculty Page</a></li>
  <li class="active"><a href="studentebookpage.php">E-book Page</a></li>
  </ul>
  
  <div class="text-center container row">
  <div class="col-md-3">&nbsp;</div>
  <div class="col-md-6">
  <div class="well">
  <div class="well" style="background-color: aqua;"><h2 style="font-family: forte;" class="text-primary">All Uploded ebooks</h2></div>
  <table class="table">
  <tr class="success"><th class="text-center">Book Name</th><th class="text-center">Upladed By</th><th class="text-center">Download Link</th></tr>
  <?php
  
  $qry="select * from ebook_master";
  $result=@mysqli_query($link,$qry) or die(mysqli_error($link));
  while($rows=mysqli_fetch_row($result))
  {
    echo"<tr class='success'><td>$rows[1]</td><td>$rows[0]</td><td><a href='$rows[2]'>Download</a></td></tr>";
  }
  
  ?>
  </table>
  </div>
  
  
  </div>