<?php
if(isset($_POST['submit']))
{
	session_start();
	$_SESSION['un']=$_POST['un'];
	header('Location:nw_ac_ver/sendsms.php');
}
?>
<html>
	<head>
		<title>KEC CORPS | SIGN UP</title>
		<link rel="stylesheet" type="text/css" href="css/admin.css"> 
	</head>
	<body>
		<div id="container">
			<div id="banner"></div>
			<div id="content">
				<center>
					<h2>KEC CORPS</h2>
					<hr><br><br>
					<table>
					<form action="<?php $_PHP_SELF ?>" method="POST">
						<tr>
							<td>Enter your Username(Roll No.)</td>
							<td><input type="text" name="un"></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="submit" value="Sign Up">
						</tr>
					</form>
					</table>
					<b><a href="index.html">Already a member?Login</a></b>
				</center>
			</div>
		</div>
	</body>
</html>