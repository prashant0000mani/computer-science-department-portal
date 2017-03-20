<head>
<link rel="stylesheet" type="text/css" href="./Bootstrap/css/bootstrap.css" />
<h2 align="center">Resume</h2>
<hr size=5 />
</head>
<div class="container">

<?php
    if(isset($_COOKIE['status']))
    { if($_COOKIE['status']=="stdnt")
	{
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
    $val=$_COOKIE['userid'];
    require "dbconnect.php";
  

$qry1="select * from student_personal_master where userid='$val';";
$res=@mysqli_query($link, $qry1) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
   
    echo "
        <div class='col-md-3'>&nbsp;</div>
        <div class='col-md-6'>
        <div class='well'><h4 class='text-primary text-center'>Personal Details</h4></div>
        
        
        <div class='row'>
        <div class='col-md-5'>
        <label class='control-label'>Name:</label></div>
        <div class='col-md-7'>$rows[1]<br></div></div>
        
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
echo "<hr color='black' size=5 />";

$qry1="select * from student_academic_master where userid='$val';";
$res=@mysqli_query($link, $qry1) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
   
    echo "
        
       <center> <div class='well'><h4 class='text-primary text-center'>Academic Details</h4></div>
        
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
echo "<hr color='black' size=5 />";

$qry1="select * from student_technical_master where userid='$val';";
$res=@mysqli_query($link, $qry1) or die(mysqli_error($link));
if($rows=mysqli_fetch_row($res))
{
   
    echo "
        
       <center><div class='well'><h4 class='text-primary text-center'>Technical Details</h4></div>
        
        
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
        <div class='col-md-7'>$rows[7]<br></div></div>";
         
          
}
echo "<hr color='black' size=5 />";
?>
<br />
<p style="text-align: left;"><b>I Hereby Declare That all the information provided by me in this resume is true.</b></p>
<br />
<div style="text-align: right;">...........................</div>
<div style="text-align: right;">Signature</div>
<a onclick="window.print()" style="text-align: center;">print</a></div>
<div class='col-md-3'>&nbsp;</div>
</div>