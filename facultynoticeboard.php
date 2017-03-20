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
    
    $userid=$_COOKIE['userid'];
    require "dbconnect.php";
?>
<ul class="nav nav-tabs">
  <li><a href="facultylogin.php">Home</a></li>
  <li><a href="facultyadddetails.php">Add/Edit Details</a></li>
  <li><a href="facultynotice.php">Notice</a></li>
  <li><a href="facultystudentpage.php">Student Page</a></li>
  <li><a href="facultyuploadebooks.php">Upload E-books</a></li>
  <li class="active"><a href="facultynoticeboard.php">Notice Board</a></li>
  <li><a href="facultyeditdeletedetails.php">Edit/Delete Details</a></li>
  </ul>
  
  
<div class="text-center">
<div class="row">
<div class="col-md-6">
<div class="well">
<div class="well" style="background-color: aqua;"><h2 class="text-primary" style="font-family: forte;">Select The Date</h2></div>
<center><form method="post" role="form" class="form-horizontal">
<div class="form-group">
<label class="control-label">Select Date (yyyy/mm/dd):</label><br />
<div class="input-group">
<?php
require "dbconnect.php";
$qry="select title from notice_master where type='faculty';";
$result=@mysqli_query($link,$qry) or die(mysqli_error($link));
$i=1;
echo "<select name='select' class='form-control'>";
while($row=mysqli_fetch_row($result))
{
echo "<option value='$row[0]'>$row[0]</option>";

}
echo "</select>";
?>
</div>
</div>
<input type="submit" name="btnselect" class="btn btn-dropbox" />
</form></center>
</div></div>

<div class="col-md-6">
<div class="well">
<?php

if(isset($_POST['btnselect']))
{    $val=$_POST['select'];
     if(!isset($val))
{ echo "<script>alert('No Records Found In Table');</script>";
    exit();
}

$qry1="select title,content,dateissued from notice_master where title='$val';";
$res=@mysqli_query($link, $qry1) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
   
    echo "
        
        <center><div class='well' style='background-color: aqua;'><h2 class='text-primary text-center' style='font-family:forte;'>$rows[0]</h2></div>
        <center><form method='post' role='form' class='form-horizontal'>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Date Of Birth <br>(yyyy/mm/dd):</label></div>
        <div class='col-md-7'>$rows[2]<br></div></div>
        
        <br/>
        <div class='row'>
        <div class='col-md-2'>&nbsp;</div>
        <div class='col-md-8'>$rows[1]<br></div>
        <div class='col-md-2'>&nbsp;</div></div>";
        
        
}
}

?>
</div>
</div>
</div>
</div>