<?php

session_start ();
include("../dbcon/connection.php"); 

if(isset($_REQUEST['sub']))
{
$a = $_REQUEST['uname'];
$b = $_REQUEST['upassword'];

$res = mysqli_query($cser,"select * from Users where uname='$a'and upassword='$b'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location:dashboard.php");
}
else	
{
	header("location:login.php?err=1");
	
}
}
?>