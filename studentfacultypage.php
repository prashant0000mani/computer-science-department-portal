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
    
    $userid=$_COOKIE['userid'];
    require "dbconnect.php";
?>
<ul class="nav nav-tabs">
  <li><a href="studentlogin.php">Home</a></li>
  <li><a href="studentadddetails.php">Add/Edit Details</a></li>
  <li ><a href="studentresemebuliderpage.php">Resume Builder</a></li>
  <li><a href="studentnoticeboard.php">Notice Board</a></li>
  <li class="active"><a href="studentfacultypage.php">Faculty Page</a></li>
  <li><a href="studentebookpage.php">E-book Page</a></li>
  </ul>



<div class="text-center">
<div class="row">
<div class="col-md-6">
<div class="well">
<div class="well" style="background-color: aqua;"><h2 class="text-primary" style="font-family: forte;">Select The Title</h2></div>
<center><form method="post" role="form" class="form-horizontal">
<div class="form-group">
<label class="control-label">Whose Value you want to Edit?</label><br />
<div class="input-group">
<?php
require "dbconnect.php";
$qry="select userid from faculty_master order by userid;";
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

$qry1="select * from faculty_personal_master where userid='$val';";
$res=@mysqli_query($link, $qry1) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
   
    echo "
        
        <center><div class='well' style='background-color: aqua;'><h2 class='text-primary text-center' style='font-family:forte;'>Faculty Details</h2></div>
        <center>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Name:</label></div>
        <div class='col-md-7 text-rght'>$rows[1]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Date Of Birth <br>(yyyy/mm/dd):</label></div>
        <div class='col-md-7'>$rows[2]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Gender:</label></div>
        <div class='col-md-7'>$rows[3]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Mobile:</label></div>
        <div class='col-md-7'>$rows[4]<br></div></div></center>";
         
          
}

$qry1="select * from faculty_master where userid='$val';";
$res=@mysqli_query($link, $qry1) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
   
    echo "
        
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Department:</label></div>
        <div class='col-md-7 text-rght'>$rows[1]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Degree:</label></div>
        <div class='col-md-7'>$rows[2]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Join Year:</label></div>
        <div class='col-md-7'>$rows[3]<br></div></div>";
}
}
?>
</div></div></div></div>
