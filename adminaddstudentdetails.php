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
  <li class="active"><a href="adminadddetails.php">Add Details</a></li>
  <li ><a href="admineditdetails.php">Edit Details</a></li>
  <li><a href="adminuploadnotice.php">Upload Notice</a></li>
  <li><a href="admineditnotice.php">Edit Notice</a></li>
  </ul>
<div class="row" style="margin-top: 20px;">
<div class="col-md-2">
&nbsp;
</div>

<div class="col-md-6">
<div class="well">
<center>
<div class="well" style="background-color: cyan">
<h2 class="text-primary" style="font-family: forte;"><span class="fa fa-user-plus fa-lg text-primary"></span>&nbsp;Add Student Details</h2></div>
<form method="post" class="form-horizontal" role="form">

<div class="form-group">
<div class="col-md-3">
<label class="control-label">E-mail:&nbsp;</label>
</div>
<div class="col-md-9">
<div class="input-group">
<input type="email" name="userid" class="form-control" required /><span class="input-group-addon"><i class="fa fa-at fa-lg text-danger"></i></span>
</div>
</div>
</div>

<div class="form-group">
<div class="col-md-3">
<label class="control-label">Roll Number:&nbsp;</label>
</div>
<div class="col-md-9">
<div class="input-group">
<input type="number" name="roll" class="form-control" required /><span class="input-group-addon"><i class="fa fa-info fa-lg text-danger"></i></span>
</div>
</div>
</div>

<div class="form-group">
<div class="col-md-3">
<label class="control-label">Batch:&nbsp;</label>
</div>
<div class="col-md-9">
<div class="input-group">
<input type="number" name="batch" class="form-control" required /><span class="input-group-addon"><i class="fa fa-times-circle-o fa-lg text-danger"></i></span>
</div>
</div>
</div>

<div class="form-group">
<div class="col-md-3">
<label class="control-label">Branch:&nbsp;</label>
</div>
<div class="col-md-9">
<div class="input-group">
<input type="text" name="branch" class="form-control" required /><span class="input-group-addon"><i class="fa fa-industry fa-lg text-danger"></i></span>
</div>
</div>
</div>

<div class="form-group">
<div class="col-md-3">
<label class="control-label">Degree:&nbsp;</label>
</div>
<div class="col-md-9">
<div class="input-group">
<input type="text" name="degree" class="form-control" required /><span class="input-group-addon"><i class="fa fa-stumbleupon fa-lg text-danger"></i></span>
</div>
</div>
</div>

<div class="form-group">
<div class="col-md-3">
<label class="control-label">Joining Year:&nbsp;</label>
</div>
<div class="col-md-9">
<div class="input-group">
<input type="number" name="join" class="form-control" required /><span class="input-group-addon"><i class="fa fa-stumbleupon fa-lg text-danger"></i></span>
</div>
</div>
</div>

<div class="form-group">
<div class="col-md-3">
<label class="control-label">Password:&nbsp;</label>
</div>
<div class="col-md-9">
<div class="input-group">
<input type="password" name="pass" class="form-control" required /><span class="input-group-addon"><i class="fa fa-eye fa-lg text-danger"></i></span>
</div>
</div>
</div>

<input type="submit" name="btnsub" value="Submit Data" class="btn btn-github" />

</form></center>
</div>
</div>

<div class="col-md-4">
<div class="well">
<div class="well" style="background-color: aqua;">
<h1 align="center" class="text-primary" style="font-family: forte;"><span class="fa fa-opera fa-lg text-primary"></span>R</h1>
</div>
<div class="text-center" style="margin-top: 30px;"><label><a href="adminaddfacultydetails.php"><u>Add Faculty Details</u></a></label></div>
</div>
</div>

<?php
if(isset($_POST['btnsub']))
{
    $userid=$_POST['userid'];
    $roll=$_POST['roll'];
    $batch=$_POST['batch'];
    $branch=$_POST['branch'];
    $degree=$_POST['degree'];
    $join=$_POST['join'];
    $pass=$_POST['pass'];
    require "dbconnect.php";
    $qry1="insert into login_master values ('$userid','$pass','stdnt');";
    $qry2="insert into student_master values ('$userid', $roll, $batch, '$branch', '$degree', $join); ";
    $qry3="insert into student_personal_master values('$userid',null,null,null,null,null);";
    $qry4="insert into student_academic_master values('$userid',null,null,null,null,null,null,null);";
    $qry5="insert into student_technical_master values('$userid',null,null,null,null,null,null,null);";
    @mysqli_query($link, $qry1) or die(mysqli_error($link));
    @mysqli_query($link, $qry2) or die(mysqli_error($link));
    @mysqli_query($link, $qry3) or die(mysqli_error($link));
    @mysqli_query($link, $qry4) or die(mysqli_error($link));
    @mysqli_query($link, $qry5) or die(mysqli_error($link));
    if(mysqli_affected_rows($link))
    {
        echo "<script>alert('Data Saved Successfully!!!');</script>";
    }
}
?>