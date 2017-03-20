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
  <li><a href="admineditdetails.php">Edit Details</a></li>
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
<h2 class="text-primary" style="font-family: forte;"><span class="fa fa-user-plus fa-lg text-primary"></span>&nbsp;Add Faculty Details</h2></div>
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
<label class="control-label">Department:&nbsp;</label>
</div>
<div class="col-md-9">
<div class="input-group">
<input type="text" name="dept" class="form-control" required /><span class="input-group-addon"><i class="fa fa-industry fa-lg text-danger"></i></span>
</div>
</div>
</div>

<div class="form-group">
<div class="col-md-3">
<label class="control-label">Degree:&nbsp;</label>
</div>
<div class="col-md-9">
<div class="input-group">
<input type="text" name="degree" class="form-control" required /><span class="input-group-addon"><i class="fa fa-dedent fa-lg text-danger"></i></span>
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
<div class="text-center" style="margin-top: 30px;"><label><a href="adminaddstudentdetails.php"><u>Add Student Details</u></a></label></div>
</div>
</div>
</div>

<?php
if(isset($_POST['btnsub']))
{
    $userid=$_POST['userid'];
    $dept=$_POST['dept'];
    $degree=$_POST['degree'];
    $join=$_POST['join'];
    $pass=$_POST['pass'];
    require "dbconnect.php";
    $qry1="insert into login_master values ('$userid','$pass','fclty');";
    $qry2="insert into faculty_master values ('$userid', '$dept', '$degree', $join); ";
    $qry3="insert into faculty_personal_master values('$userid',null,null,null,null ); ";
    @mysqli_query($link, $qry1) or die(mysqli_error($link));
    @mysqli_query($link, $qry2) or die(mysqli_error($link));
    @mysqli_query($link, $qry3) or die(mysqli_error($link));
    if(mysqli_affected_rows($link))
    {
        echo "<script>alert('Data Saved Successfully!!!');</script>";
    }
}
?>