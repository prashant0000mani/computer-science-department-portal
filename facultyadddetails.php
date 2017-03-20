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
  <li class="active"><a href="facultyadddetails.php">Add/Edit Details</a></li>
  <li><a href="facultynotice.php">Notice</a></li>
  <li ><a href="facultystudentpage.php">Student Page</a></li>
  <li><a href="facultyuploadebooks.php">Upload E-books</a></li>
  <li><a href="facultynoticeboard.php">Notice Board</a></li>
  <li><a href="facultyeditdeletedetails.php">Edit/Delete Details</a></li>
  </ul>
  <div class="row">
  <div class="col-md-3" >&nbsp;</div>
  <div class="col-md-6">
  <div class="well">
<?php

$qry="select * from faculty_personal_master where userid='$userid';";
$res=@mysqli_query($link, $qry) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
    echo"
        
        <div class='well' style='background-color: aqua;'><h2 class='text-primary text-center' style='font-family:forte;'>Edit Your Details</h2></div>
        <center><form method='post' role='form' class='form-horizontal'>
        
        <div class='row'>
        <div class='col-md-3'>
        <label class='control-label'>Name:</label></div>
        <div class='col-md-7'>
        <input type='text' name='name' class='form-control' value='$rows[1]'  /><br></div></div>
        
        <div class='row'>
        <div class='col-md-3'>
        <label class='control-label'>Date Of Birth:</label></div>
        <div class='col-md-7'>
        <input type='date' name='dob' class='form-control' value='$rows[2]'  /><br></div></div>
        
        <div class='row'>
        <div class='col-md-3'>
        <label class='control-label'>Gender:</label></div>
        <div class='col-md-7'>
        <input type='radio' name='gender' value='male' class='radio-inline' checked />Male<input type='radio' name='gender' value='female' class='radio-inline' />Female</div></div><br/>
        
        <div class='row'>
        <div class='col-md-3'>
        <label class='control-label'>Mobile</label></div>
        <div class='col-md-7'>
        <input type='number' name='mobile' class='form-control' value=$rows[4]  /><br></div></div>
        <div class='row'>
        <input type='submit' name='btnedit' value='Update Data' class='btn btn-dropbox' />  </div>
        </form><center>";   
}

if(isset($_POST['btnedit']))
{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $qry1="update faculty_personal_master set name='$name', dob='$dob', gender='$gender', mobile=$mobile where userid='$userid' ;";
    
    @mysqli_query($link, $qry1) or die(mysqli_error($link));
    if(mysqli_affected_rows($link))
    {
        echo "<script>alert('Data Updated Successfully!!!');</script>";
    }
}
?>
</div></div></div>