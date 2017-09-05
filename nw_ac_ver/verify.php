<?php
session_start();
$un=$_SESSION['un'];
$ph=$_SESSION['phone'];
$genotp=$_SESSION['otp'];
if(isset($_POST['submit']))
{
	$entotp=$_POST['otp'];
	if ( $genotp == $entotp )
	{
		header('Location:../cr.php');
	}
	else
	{
		echo "<b style='color:red;'>wrong otp..Enter the correct otp</b>";
	}
}
?>
	<html>
		<head>
			<title>Verify Account</title>
			<link rel="stylesheet" type="text/css" href="../css/header.css">
		</head>
		<body>
			<div id="container">
				<div id="banner"></div>
				<div id="content">
					<center>
						<h2>KEC CORPS</h2>
						<hr><br><br>
						<table>
						<b>OTP verification for account <?php echo $un ?></b>
						<form action="<?php $_PHP_SELF ?>" method="POST">
							<tr>
								<td>Enter the OTP sent to <?php echo $ph ?></td>
								<td><input type="text" name="otp"></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" name="submit" value="Verify">
							</tr>
						</form>
						</table>
					</center>
				</div>
			</div>
		</body>
	</html>