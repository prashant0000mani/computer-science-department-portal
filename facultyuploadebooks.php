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
  <li class="active"><a href="facultyuploadebooks.php">Upload E-books</a></li>
  <li><a href="facultynoticeboard.php">Notice Board</a></li>
  <li><a href="facultyeditdeletedetails.php">Edit/Delete Details</a></li>
  </ul>
  <div class="text-center">
<div class="row">
<div class="col-md-3">&nbsp;</div>
<div class="col-md-6">
<div class="well">
<div class="well" style="background-color: aqua;"><h2 class="text-primary" style="font-family: forte;">Enter Ebook Details</h2></div>
<center><form method="post" role="form" class="form-horizontal" enctype="multipart/form-data">
<div class="row">
<div class="form-group">
<div class="col-md-3" >
<label class="control-label">Book Name:</label></div>
<div class="col-md-7">
<div class="input-group">
<input type="text" name="name" class="form-control" required /></div></div></div></div>

<div class="row">
<div class="form-group">
<div class="col-md-3" >
<label class="control-label">Locate File:</label></div>
<div class="col-md-7">
<div class="input-group">
<input type="file" name="file" class="form-control" /></div></div></div></div>

<div class="center-block"><input type="submit" name="btnupload" value="Uplaod" class="btn btn-soundcloud" required /></div>


</form></center></div></div>
<div class="col-md-3">&nbsp;</div>
</div></div>



<?php
if(isset($_POST['btnupload']))
{
    if($_FILES['file']['name']=="")
 {echo "<script>alert('Choose a ebook/pdf file');</script>";
 exit();}
 $name=$_POST['name'];
 if($_FILES['file']['type']=="application/octet-stream" ||$_FILES['file']['type']=="application/pdf")
 {
 $path= $_SERVER['DOCUMENT_ROOT']."cseportalproject/documents/".$_FILES['file']['name'];
 }
 else
 {  echo "<script>alert('File is not ebook or pdf');</script>";
    exit();}

move_uploaded_file($_FILES['file']['tmp_name'],$path);
$qry="insert into ebook_master values('$userid','$name','$path');";
@mysqli_query($link,$qry) or die(mysqli_error($link));
if(mysqli_affected_rows($link))
{
    echo "<script>alert('Your Book was uploded Successfully');</script>";
}
}
?>

<a href="C:/wamp/www/cseportalproject/documents/Learning_PHP_MySQL_Javascript_CSS_HTML5__Robin_Nixon_3e.pdf" >Download</a>