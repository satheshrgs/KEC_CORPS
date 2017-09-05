<?php
require_once('inc/dbc.php');
session_start();
if(isset($_POST['submit'])) 
{
	$un = mysqli_real_escape_string($conn,$_POST['un']);
    $pas=mysqli_real_escape_string($conn,$_POST['pas']);
	$sql="select username,password from basic_info where username='".$un."' AND password='".$pas."'";
	$result=$conn->query($sql);
	if($result->num_rows==1)
	{
	  $_SESSION['un']=$un;
	  header('Location:home.html');
	}
    else
		echo "login failed";
}
?>