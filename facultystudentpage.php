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
  <li class="active"><a href="facultystudentpage.php">Student Page</a></li>
  <li><a href="facultyuploadebooks.php">Upload E-books</a></li>
  <li><a href="facultynoticeboard.php">Notice Board</a></li>
  <li><a href="facultyeditdeletedetails.php">Edit/Delete Details</a></li>
  </ul>
  
  
<div class="text-center">
<div class="row">
<div class="col-md-6">
<div class="well">
<div class="well" style="background-color: aqua;"><h2 class="text-primary" style="font-family: forte;">Enter Batch</h2></div>
<center><form method="post" role="form" class="form-horizontal">
<div class="row">
<div class="form-group">
<div class="col-md-3" >
<label class="control-label">Enter Batch:</label></div>
<div class="col-md-7">
<div class="input-group">
<input type="number" name="bat" class="form-control" /></div></div></div></div>
<div class="center-block"><input type="submit" name="btnbatch" class="btn btn-odnoklassniki" /></div>
<?php
if(isset($_POST['btnbatch']))
{$batch=$_POST['bat'];
$qry="select userid from student_master where batch=$batch;";
$result=@mysqli_query($link,$qry) or die(mysqli_error($link));
echo"<div class'row'>
<div class='form-group'>
<label class='control-label'>Whose Details you want to See?</label><br />
<div class='input-group'>";
echo "<select name='select' class='form-control'>";
while($row=mysqli_fetch_row($result))
{
echo "<option value='$row[0]'>$row[0]</option>";

}
echo "</select></div>
<br>
<input type='submit' name='btnselect' class='btn btn-microsoft' />";
}
?>
</form></center></div></div>

<div class="col-md-6">
<div class="well">
<?php

if(isset($_POST['btnselect']))
{    $val=$_POST['select'];
     if(!isset($val))
{ echo "<script>alert('No Records Found In Table');</script>";
    exit();
}

$qry1="select * from student_personal_master where userid='$val';";
$res=@mysqli_query($link, $qry1) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
   
    echo "
        
        <center><div class='well' style='background-color: aqua;'><h4 class='text-primary text-center' style='font-family:forte;'>Student Personal Details</h4></div>
        <center><form method='post' role='form' class='form-horizontal'>
        
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
        <label class='control-label'>Address:</label></div>
        <div class='col-md-7'>$rows[4]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Mobile:</label></div>
        <div class='col-md-7'>$rows[5]<br></div></div><center>";
         
          
}

$qry1="select * from student_academic_master where userid='$val';";
$res=@mysqli_query($link, $qry1) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
   
    echo "
        
       <center> <div class='well' style='background-color: aqua;'><h4 class='text-primary text-center' style='font-family:forte;'>Student Academic Details</h4></div>
        <center><form method='post' role='form' class='form-horizontal'>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Academic Achievment:</label></div>
        <div class='col-md-7'>$rows[1]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Sports:</label></div>
        <div class='col-md-7'>$rows[2]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Cultural:</label></div>
        <div class='col-md-7'>$rows[3]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Others:</label></div>
        <div class='col-md-7'>$rows[4]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Graduation:</label></div>
        <div class='col-md-7'>$rows[5]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Intermediate:</label></div>
        <div class='col-md-7'>$rows[6]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>High-School:</label></div>
        <div class='col-md-7'>$rows[7]<br></div></div></center>";
         
          
}

$qry1="select * from student_technical_master where userid='$val';";
$res=@mysqli_query($link, $qry1) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
   
    echo "
        
       <center><div class='well' style='background-color: aqua;'><h4 class='text-primary text-center' style='font-family:forte;'>Student Technical Details</h4></div>
        <center><form method='post' role='form' class='form-horizontal'>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Programming Language:</label></div>
        <div class='col-md-7'>$rows[1]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Database:</label></div>
        <div class='col-md-7'>$rows[2]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Operating System:</label></div>
        <div class='col-md-7'>$rows[3]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Softwares:</label></div>
        <div class='col-md-7'>$rows[4]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Other Skills:</label></div>
        <div class='col-md-7'>$rows[5]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Industrial Experiance:</label></div>
        <div class='col-md-7'>$rows[6]<br></div></div>
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Academic Project:</label></div>
        <div class='col-md-7'>$rows[7]<br></div></div></center>";
         
          
}
}

?>
</div>
</div>
</div>
</div>