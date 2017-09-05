<?php
require_once('inc/dbc.php');
session_start();
$un=$_SESSION['un'];
$sql="INSERT INTO `personal_info`(`username`) VALUES ('".$un."')";
$result=$conn->query($sql);
$sql="CREATE TABLE _".$un."(category varchar(20),event_name varchar(20),college_name varchar(30),yr varchar(4),prize varchar(10));";
$result=$conn1->query($sql);
$sql="CREATE TABLE _".$un."(category varchar(20),event_name varchar(20),college_name varchar(30),yr varchar(4),prize varchar(10));";
$result=$conn2->query($sql);
header('Location:fu.php');
?>