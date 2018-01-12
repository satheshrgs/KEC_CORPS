<?php
include('way2sms-api.php');
session_start();
$un=$_SESSION['un'];
require_once('../inc/dbc.php');
$sql="select phone from active_info where username='".$un."'";
$res=$conn->query($sql);
$r=$res->fetch_assoc();
$ph=$r['phone'];
$_SESSION['phone']=$ph;
$otp=rand(100000,500000);
$msg="Your OTP for KEC CORPS is ".$otp;
echo "redirecting....";
sendWay2SMS ( '<your_phone_number>' , '<your_password>' ,$ph,$msg);
$_SESSION['otp']=$otp;
header('Location:verify.php');
?>
