<?php
require_once('inc/dbc.php');
session_start();
$un=$_SESSION['un'];
$ph=$_SESSION['phone'];
if(isset($_POST['update']))
{
	$em=$_POST['email'];
    $pas=$_POST['password'];
	$g=$_POST['gender'];
    $b=$_POST['batch'];
    $c=$_POST['course'];
    $d=$_POST['department'];
    $sql="INSERT INTO `basic_info`(`username`, `email`, `password`, `gender`, `batch`, `course`, `department`, `contact`) VALUES ('".$un."','".$em."','".$pas."','".$g."','".$b."','".$c."','".$d."','".$ph."')";
    $result=$conn->query($sql);
	$sql="UPDATE `active_info` SET `activated`=1 WHERE username='".$un."' ";
    $result=$conn->query($sql);
	header('Location:home.html');
}
?>
<html>
	<head>
		<title>Update Details | KEC CORPS</title>
		<link rel="stylesheet" type="text/css" href="css/header.css">
	</head>
	<body>
		<div id="container">
			<div id="banner"></div>
			<div id="content">
				<center>
					<h2>KEC CORPS</h2>
					<hr><br><br>
					<h2>Update Your info</h2>
					<br>
					<table>
					<form method="POST" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
						<tr>
							<td>Username (Roll no):</td><td><?php  echo $un ?></td>
						</tr>
						<tr>
							<td>Email ID:</td><td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>Password:</td><td><input type="password" name="password" required></td>
						</tr>
						<tr>
								<td>I am</td>
								<td><select name="gender">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</td>
							</tr>
							<tr>
								<td>Batch</td>
								<td><input type="number" name="batch" min="2014"></td>
							</tr>
							<tr>
								<td>Course</td>
								<td><select name="course">
									<option value="B.E.,">B.E.,</option>
									<option value="B.Tech.,">B.Tech.,</option>
								</td>
							</tr>
							<tr>
								<td>Department</td>
								<td><select name="department">
									<option value="Civil Engineering">Civil Engineering</option>
									<option value="Mechanical Engineering">Mechanical Engineering</option>
									<option value="Mechatronics Engineering">Mechatronics Engineering</option>
									<option value="Automobile Engineering ">Automobile Engineering </option>
									<option value="Chemical Engineering">Chemical Engineering</option>
									<option value="Food Technology">Food Technology</option>
									<option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
									<option value="Computer Science and Engineering">Computer Science and Engineering</option>
									<option value="Information Technology">Information Technology</option>
								</td>
							</tr>
							<tr>
								<td>Phone</td>
								<td><?php echo $ph?></td>
							</tr>
							<tr></tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="update" value="Update" ></td>
						</tr>
						</form>
					</table>
				</center>
			</div>
		</div>
	</body>
</html>