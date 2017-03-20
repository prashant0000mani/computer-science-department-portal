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
?>
<ul class="nav nav-tabs">
  <li><a href="facultylogin.php">Home</a></li>
  <li><a href="facultyadddetails.php">Add/Edit Details</a></li>
  <li><a href="facultynotice.php">Notice</a></li>
  <li ><a href="facultystudentpage.php">Student Page</a></li>
  <li><a href="facultyuploadebooks.php">Upload E-books</a></li>
  <li><a href="facultynoticeboard.php">Notice Board</a></li>
  <li class="active"><a href="facultyeditdeletedetails.php">Edit/Delete Details</a></li>
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
$qry="select title from notice_master where userid='$userid';";
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
</div>

</div>
<div class="col-md-6">
<div class="well">
<?php

if(isset($_POST['btnselect']))
{    $val=$_POST['select'];
     if(!isset($val))
{ echo "<script>alert('No Records Found In Table');</script>";
    exit();
}
setcookie("title",$val);

$qry1="select title,content from notice_master where title='$val';";
$res=@mysqli_query($link, $qry1) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
    echo "
        
        <div class='well' style='background-color: aqua;'><h2 class='text-primary text-center' style='font-family:forte;'>Edit Notice Details</h2></div>
        <center><form method='post' role='form' class='form-horizontal'>
        
        <div class='col-md-3'>
        <label class='control-label'>Title:</label></div>
        <div class='col-md-7'>
        <input type='text' name='title' value='$rows[0]' class='form-control' required /><br></div>
        
        <div class='row'>
        <div class='col-md-3'>
        <label class='control-label'>Others:</label></div>
        <div class='col-md-7'>
        <textarea name='content'  cols=10 rows=3 class='form-control'>$rows[1]</textarea><br></div></div>
         
        <div class='col-md-6'> 
        <label class='control-label'>What do You wanna do?</label></div>
        <div class='col-md-4'>
        <select class='form-control' name='choice'><option value='1'>Edit</option><option value='2'>Delete</option></select><br></div>
        <input type='submit' name='btnedit' value='Update Data' class='btn btn-dropbox' />  
        </form><center>";   
}
}
if(isset($_POST['btnedit']))
{   $titletocheck=$_COOKIE['title'];
    $title=$_POST['title'];
    $content=$_POST['content'];
    $option=$_POST['choice'];
    $qry1="update notice_master set title='$title', content='$content' where title='$titletocheck' ;";
    $qry2="delete from notice_master where title='$titletocheck';";
    if($option==1)
    {@mysqli_query($link, $qry1) or die(mysqli_error($link));}
    else if($option==2)
    {@mysqli_query($link, $qry2) or die(mysqli_error($link));}
    if(mysqli_affected_rows($link))
    {
        echo "<script>alert('Data Updated Successfully!!!');</script>";
    }
    else
    echo "<script>alert('No Changes Were Made!!!');</script>";
}
?>
</div>
</div>
</div>

</div>