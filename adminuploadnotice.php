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
    
    $userid=$_COOKIE['userid'];
    require "dbconnect.php";
?>
<ul class="nav nav-tabs">
  <li><a href="adminlogin.php">Home</a></li>
  <li><a href="adminadddetails.php">Add Details</a></li>
  <li ><a href="admineditdetails.php">Edit Details</a></li>
  <li class="active"><a href="adminuploadnotice.php">Upload Notice</a></li>
  <li><a href="admineditnotice.php">Edit Notice</a></li>
  </ul>
<div class="row" style="margin-top: 20px;">
<div class="col-md-3">
&nbsp;
</div>

<div class="col-md-6">
<div class="well">
<center>
<div class="well" style="background-color: cyan">
<h2 class="text-primary" style="font-family: forte;"><span class="fa fa-newspaper-o fa-lg text-primary"></span>&nbsp;Upload Notice</h2></div>
<form method="post" class="form-horizontal" role="form">

<div class="form-group">
<div class="col-md-3">
<label class="control-label">Title:&nbsp;</label>
</div>
<div class="col-md-9">
<div class="input-group">
<input type="text" name="title" class="form-control" required /><span class="input-group-addon"><i class="fa fa-header fa-lg text-danger"></i></span>
</div>
</div>
</div>

<div class="form-group">
<div class="col-md-3">
<label class="control-label">Content:&nbsp;</label>
</div>
<div class="col-md-9">
<textarea name="content" cols="40" rows="4" class="form-control" ></textarea>
</div>
</div>

<div class="form-group">
<div class="col-md-3">
<label class="control-label">Notice For:&nbsp;</label>
</div>
<div class="col-md-9">
<select name="noticefor" class="form-control"><option value="-1">Please Select An Option</option><option value="student">Student</option><option value="faculty">Faculty</option></select>
</div>
</div>

<input type="submit" name="btnsub" value="Submit Data" class="btn btn-twitter" />

</form></center>
</div>
</div>
<?php
if(isset($_POST['btnsub']))
{
$title=$_POST['title'];
$content=$_POST['content'];
$choice =$_POST['noticefor'];
$date=date("20y-m-d");
$qry= "insert into notice_master values('$userid','$title','$content','$choice','$date','admin');";
@mysqli_query($link,$qry) or die(mysqli_error($link));
if(mysqli_affected_rows($link))
{
    echo "<script>alert('Notice Saved !!!');</script>";
}
}

?>
