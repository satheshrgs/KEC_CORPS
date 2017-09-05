<?php
if(isset($_POST['submit'])) 
{
	$un = $_POST['un'];
    $pas = $_POST['pas'];
	if($un == 'admin' && $pas == 'admin')
	  header('Location:cont/adm.html');
    else
		echo "login failed";
}
?>
<html>
	<head>
		<title>Admin Login</title>
		<link rel="stylesheet" type="text/css" href="../css/admin.css"> 
	</head>
	<body>
		<center>
			<div id="container">
				<div id="banner">
				</div>
				<div id="body">
					<h2>Admin Login</h2>
					<hr><br><br><br>
					<form action="<?php $_PHP_SELF ?>" method="POST">
						<table>
							<tr>
								<td>Username:</td>
								<td><input type="text" name="un"></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" name="pas"></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
							</tr>
						</table>
					</form>
			</div>
		</center>
	</body>
</html>