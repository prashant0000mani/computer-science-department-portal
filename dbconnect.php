<?php
$host="localhost";
$user="root";
$pwd="";
$dbname="csdp";
$link=@mysqli_connect($host,$user,$pwd,$dbname);
if(mysqli_connect_errno())
{
    echo mysqli_connect_error();
    exit();
}	
?>
