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
  <li><a href="studentlogin.php">Home</a></li>
  <li><a href="studentadddetails.php">Add/Edit Details</a></li>
  <li class="active"><a href="studentresemebuliderpage.php">Resume Builder</a></li>
  <li><a href="studentnoticeboard.php">Notice Board</a></li>
  <li><a href="studentfacultypage.php">Faculty Page</a></li>
  <li><a href="studentebookpage.php">E-book Page</a></li>
  </ul>
  <div class="text-center">
  <div class="row">
  <div class="col-md-3">&nbsp;</div>
  <div class="col-md-6">
  <div class="well">
  <div class="well" style="background-color: aqua;"><h2 style="font-family: forte;" class="text-primary"><span class="fa fa-level-up fa-lg">&nbsp;Genrate your Resume</span></h2></div>
  <form method="post" role="form">
  <div class="row">
  <label class="control-label"><u>Click on the Button to Genrate your Resume</u></label></div>
  <div class="row">
  <div class="col-md-3">&nbsp;</div>
  <div class="col-md-6">
  <br />
  <input type="button" name="btnresume" value="Genrate" class="btn btn-linkedin btn-block" onclick="window.open('resume.php')" /></div>
  <div class="col-md-3">&nbsp;</div></div>
  </form>
  </div>
  </div>
  </div>
  </div>