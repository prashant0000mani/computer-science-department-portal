<?php
    if(isset($_COOKIE['status']))
    { if($_COOKIE['status']=="stdnt")
	{include "header.html";
    include "afterloginnavbar.html";
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
    
    $userid=$_COOKIE['userid'];
    require "dbconnect.php";
?>
<ul class="nav nav-tabs">
  <li><a href="studentlogin.php">Home</a></li>
  <li class="active"><a href="studentadddetails.php">Add/Edit Details</a></li>
  <li ><a href="studentresemebuliderpage.php">Resume Builder</a></li>
  <li><a href="studentnoticeboard.php">Notice Board</a></li>
  <li><a href="studentfacultypage.php">Faculty Page</a></li>
  <li><a href="studentebookpage.php">E-book Page</a></li>
  </ul>

  
<div class="text-center">
<div class="row">
<div class="col-md-4">
<div class="well">
<div class="well" style="background-color: aqua;"><h2 class="text-primary" style="font-family: forte;">Select An Option</h2></div>
<center><form method="post" role="form" class="form-horizontal">
<div class="form-group">
<label class="control-label">Choose a Category to Edit..</label><br />
<div class="input-group">
<br />
<select name="select" class="form-control">
<option value="1">Personal Details</option>
<option value="2">Academic Details</option>
<option value="3">Technical Details</option>
</select>
</div>
</div>
<input type="submit" name="btnselect" class="btn btn-dropbox" />
</form></center>
</div></div>

<div class="col-md-1">&nbsp;</div>

<div class="col-md-7">
<div class="well">
<?php
	
    if(isset($_POST['btnselect']))
    {
        
        $choice=$_POST['select'];
        switch($choice)
        {
            case 1: 
                    $qry="select * from student_personal_master where userid='$userid';";
                    $res=@mysqli_query($link, $qry) or die(mysqli_error($link));
                    if($rows=mysqli_fetch_row($res))
                    {
                    echo"
        
                        <div class='well' style='background-color: aqua;'><h2 class='text-primary text-center' style='font-family:forte;'>Edit Student Details</h2></div>
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
                        <label class='control-label'>Address:</label></div>
                        <div class='col-md-7'>
                        <textarea name='address' cols=10 rows=4 class='form-control'>$rows[4]</textarea><br></div></div>
                        
                        <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Mobile</label></div>
                        <div class='col-md-7'>
                        <input type='number' name='mobile' class='form-control' value=$rows[5]  /><br></div></div>
                        <div class='row'>
                        <input type='submit' name='btnpersonaledit' value='Update Data' class='btn btn-dropbox' />  </div>
                        </form><center>";   
                        
                        }  
                        
                        break;
             case 2:        
                        $qry="select * from student_academic_master where userid='$userid';";
                        $res=@mysqli_query($link, $qry) or die(mysqli_error($link));
                        if($rows=mysqli_fetch_row($res))
                        {
                        echo"
        
                        <div class='well' style='background-color: aqua;'><h2 class='text-primary text-center' style='font-family:forte;'>Edit Student Details</h2></div>
                        <center><form method='post' role='form' class='form-horizontal'>
                        
                        <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Achievments:</label></div>
                        <div class='col-md-7'>
                        <textarea name='achvmnt'  cols=10 rows=3 class='form-control'>$rows[1]</textarea><br></div></div>
                        
                        <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Sports:</label></div>
                        <div class='col-md-7'>
                        <textarea name='sports'  cols=10 rows=3 class='form-control'>$rows[2]</textarea><br></div></div>
                        
                        <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Cultural:</label></div>
                        <div class='col-md-7'>
                        <textarea name='cltr'  cols=10 rows=3 class='form-control'>$rows[3]</textarea><br></div></div>
                        
                        <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Others:</label></div>
                        <div class='col-md-7'>
                        <textarea name='other'  cols=10 rows=3 class='form-control'>$rows[4]</textarea><br></div></div>
                        
                        <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Graduation:</label></div>
                        <div class='col-md-7'>
                        <input type='number' name='grad' class='form-control' value=$rows[5]  /><br></div></div>
                         
                         <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Intermediate:</label></div>
                        <div class='col-md-7'>
                        <input type='number' name='inter' class='form-control' value=$rows[6]  /><br></div></div>
                        
                         <div class='row'>
                         <div class='col-md-3'>
                         <label class='control-label'>High School:</label></div>
                         <div class='col-md-7'>
                         <input type='number' name='high' class='form-control' value=$rows[7] /><br></div></div>
                        
                        
                        <div class='row'>
                        <input type='submit' name='btnacademicedit' value='Update Data' class='btn btn-dropbox' />  </div>
                        </form><center>";   
                        
                        } 
                        break;
              case 3: 
                         $qry="select * from student_technical_master where userid='$userid';";
                        $res=@mysqli_query($link, $qry) or die(mysqli_error($link));
                        if($rows=mysqli_fetch_row($res))
                        {
                        echo"
        
                        <div class='well' style='background-color: aqua;'><h2 class='text-primary text-center' style='font-family:forte;'>Edit Student Details</h2></div>
                        <center><form method='post' role='form' class='form-horizontal'>
                        
                        
                        
                        <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Programming Language:</label></div>
                        <div class='col-md-7'>
                        <input type='text' name='prgm' class='form-control value='$rows[1]' /><br></div></div>
                        
                        <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Database Known:</label></div>
                        <div class='col-md-7'>
                        <input type='text' name='dbms' class='form-control value='$rows[2]' /><br></div></div>
                        
                        <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Operating System:</label></div>
                        <div class='col-md-7'>
                        <input type='text' name='os' class='form-control value='$rows[3]' /><br></div></div>
                         
                         <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Softwares:</label></div>
                        <div class='col-md-7'>
                        <input type='text' name='sw' class='form-control value='$rows[4]' /><br></div></div>
                        
                         <div class='row'>
                         <div class='col-md-3'>
                         <label class='control-label'>Other Skills:</label></div>
                         <div class='col-md-7'>
                         <input type='text' name='other' class='form-control value='$rows[5]' /><br></div></div>
                         
                         
                         <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Industry Experiance:</label></div>
                        <div class='col-md-7'>
                        <textarea name='inex'  cols=10 rows=3 class='form-control'>$rows[6]</textarea><br></div></div>
                        
                        <div class='row'>
                        <div class='col-md-3'>
                        <label class='control-label'>Academic Project:</label></div>
                        <div class='col-md-7'>
                        <textarea name='acdmicproject' cols=10 rows=3 class='form-control'>$rows[7]</textarea><br></div></div>
                        
                        
                        <div class='row'>
                        <input type='submit' name='btntechnicaledit' value='Update Data' class='btn btn-dropbox' />  </div>
                        </form><center>";   
                        
                        } 
                        break;
        }
  
}
 if(isset($_POST['btnpersonaledit']))
{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $qry1="update student_personal_master set name='$name', dob='$dob', gender='$gender', address='$address', mobile=$mobile where userid='$userid' ;";
    
    @mysqli_query($link, $qry1) or die(mysqli_error($link));
    if(mysqli_affected_rows($link))
    {
        echo "<script>alert('Data Updated Successfully!!!');</script>";
    }   
    
  }  
  
  if(isset($_POST['btnacademicedit']))
{
    $achvmnt=$_POST['achvmnt'];
    $sports=$_POST['sports'];
    $culture=$_POST['cltr'];
    $others=$_POST['other'];
    $grad=$_POST['grad'];
    $inter=$_POST['inter'];
    $high=$_POST['high'];
    $qry1="update student_academic_master set acdachvmt='$achvmnt', sports='$sports', cultural='$culture', others='$others', graduation=$grad, inter=$inter  , highschool=$high where userid='$userid' ;";
    
    @mysqli_query($link, $qry1) or die(mysqli_error($link));
    if(mysqli_affected_rows($link))
    {
        echo "<script>alert('Data Updated Successfully!!!');</script>";
    }   
    
  } 
  
  if(isset($_POST['btntechnicaledit']))
{
    $prgm=$_POST['prgm'];
    $db=$_POST['dbms'];
    $os=$_POST['os'];
    $sw=$_POST['sw'];
    $others=$_POST['other'];
    $inex=$_POST['inex'];
    $ap=$_POST['acdmicproject'];
    $qry1="update student_technical_master set prgmlanguage='$prgm', databasekwn='$db', os='$os', software='$sw', otherskill='$others' , industryexp='$inex' ,academicproject='$ap' where userid='$userid' ;";
    
    @mysqli_query($link, $qry1) or die(mysqli_error($link));
    if(mysqli_affected_rows($link))
    {
        echo "<script>alert('Data Updated Successfully!!!');</script>";
    }   
    
  } 
    
    
?>


</div>
</div>
</div>
</div>
