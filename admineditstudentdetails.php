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
  <li ><a href="adminlogin.php">Home</a></li>
  <li><a href="adminadddetails.php">Add Details</a></li>
  <li class="active" ><a href="admineditdetails.php">Edit Details</a></li>
  <li><a href="adminuploadnotice.php">Upload Notice</a></li>
  <li><a href="admineditnotice.php">Edit Notice</a></li>
  </ul>
  
<div class="text-center">
<div class="row">
<div class="col-md-6">
<div class="well">
<div class="well" style="background-color: aqua;"><h2 class="text-primary" style="font-family: forte;">Select An Option</h2></div>
<center><form method="post" role="form" class="form-horizontal">
<div class="form-group">
<label class="control-label">Whose Value you want to Edit?</label><br />
<div class="input-group">
<?php
require "dbconnect.php";
$qry="select userid from login_master where status='stdnt';";
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

<div class="row">

<div class="col-md-12">
<div class="well">
<div class="well" style="background-color: aqua;">
<h1 align="center" class="text-primary" style="font-family: forte;"><span class="fa fa-opera fa-lg text-primary"></span>R</h1>
</div>
<div class="text-center" style="margin-top: 30px;"><label><a href="admineditfacultydetails.php"><u>Edit Faculty Details</u></a></label></div>
</div>
</div>


</div>

</div>
<div class="col-md-6">
<div class="well">
<?php
if(isset($_POST['btnselect']))
{   $val=$_POST['select'];
    if(!isset($val))
{ echo "<script>alert('No Records Found In Table');</script>";
    exit();
}

setcookie("user",$val);
$qry1="select * from student_master where userid='$val';";
$res=@mysqli_query($link, $qry1) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
    echo"
        
        <div class='well' style='background-color: aqua;'><h2 class='text-primary text-center' style='font-family:forte;'>Edit Student Details</h2></div>
        <center><form method='post' role='form' class='form-horizontal'>
        <div class='col-md-3'>
        <label class='control-label'>Roll Number:</label></div>
        <div class='col-md-7'>
        <input type='number' name='roll' value=$rows[1] class='form-control' /><br></div>
        <div class='col-md-3'>
        <label class='control-label'>Batch</label></div>
        <div class='col-md-7'>
        <input type='number' name='batch' value=$rows[2] class='form-control' /><br></div>
        
        <div class='col-md-3'>
        <label class='control-label'>Branch</label></div>
        <div class='col-md-7'>
        <input type='text' name='branch' value='$rows[3]' class='form-control' /><br></div>
        
        <div class='col-md-3'>
        <label class='control-label'>Degree</label></div>
        <div class='col-md-7'>
        <input type='text' name='degree' value='$rows[4]' class='form-control' /><br></div>
        
        <div class='col-md-3'> 
        <label class='control-label'>Join Year</label></div>
        <div class='col-md-7'>
        <input type='number' name='join' value=$rows[5] class='form-control' /><br></div>  
        <div class='col-md-6'> 
        <label class='control-label'>What do You wanna do?</label></div>
        <div class='col-md-4'>
        <select class='form-control' name='choice'><option value='1'>Edit</option><option value='2'>Delete</option></select><br></div>
        <input type='submit' name='btnedit' value='Update Data' class='btn btn-dropbox' />  
        </form><center>";   
}
}
if(isset($_POST['btnedit']))
{   $user=$_COOKIE['user'];
    $roll=$_POST['roll'];
    $batch=$_POST['batch'];
    $branch=$_POST['branch'];
    $degree=$_POST['degree'];
    $join=$_POST['join'];
    $option=$_POST['choice'];
    $qry1="update student_master set roll=$roll, batch=$batch,branch='$branch', degree='$degree', joinyear=$join where userid='$user' ;";
    $qry2="delete from login_master where userid='$user';";
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
