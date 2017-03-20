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
  <li><a href="adminlogin.php">Home</a></li>
  <li ><a href="adminadddetails.php">Add Details</a></li>
  <li class="active"><a href="admineditdetails.php">Edit Details</a></li>
  <li><a href="adminuploadnotice.php">Upload Notice</a></li>
  <li><a href="admineditnotice.php">Edit Notice</a></li>
  </ul>
<div class="text-center">
<div class="row">
<div class="col-md-3">
&nbsp;</div>
<div class="col-md-6">
<div class="well">
<div class="well" style="background-color: aqua;"><h2 class="text-primary" style="font-family: forte;">Select An Option</h2></div>
<center><form method="post" role="form" class="form-horizontal">
<div class="form-group">
<label class="control-label">Whose Value you want to Edit?</label><br />
<div class="input-group">
<select name="select" class="form-control">
<option value="1">Student</option>
<option value="2">Faculty</option>
</select>
</div>
</div>
<input type="submit" name="btnselect" class="btn btn-dropbox" />
</form></center>
</div></div>
<div class="col-md-3">
&nbsp;</div>
</div>
</div>
<?php
if(isset($_POST['btnselect']))
{
    $a=$_POST['select'];
    switch($a)
    {
        case 1: header("location:admineditstudentdetails.php");
                    break;
        case 2: header("location:admineditfacultydetails.php");
            break;
    }
}


?>
