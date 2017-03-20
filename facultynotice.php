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
  <li class="active"><a href="facultynotice.php">Notice</a></li>
  <li><a href="facultystudentpage.php">Student Page</a></li>
  <li><a href="facultyuploadebooks.php">Upload E-books</a></li>
  <li><a href="facultynoticeboard.php">Notice Board</a></li>
  <li><a href="facultyeditdeletedetails.php">Edit/Delete Details</a></li>
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


<input type="submit" name="btnsub" value="Submit Data" class="btn btn-foursquare" />

</form></center>
</div>
</div>
<?php
if(isset($_POST['btnsub']))
{
$title=$_POST['title'];
$content=$_POST['content'];
$date=date("20y-m-d");
$qry= "insert into notice_master values('$userid','$title','$content','student','$date','fclty');";
@mysqli_query($link,$qry) or die(mysqli_error($link));
if(mysqli_affected_rows($link))
{
    echo "<script>alert('Notice Saved !!!');</script>";
}
}

?>
