<?php
session_start();
$un=$_SESSION['un'];
?>
<html>
	<body>
		<center>
			<h2>KEC CORPS</h2>
			<hr><br><br>
			<table>
			<form action="<?php $_PHP_SELF ?>" method="POST">
					<tr>
						<td>Username (Roll no):</td><td><?php  echo $un ?></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pas"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="submit" value="Login">
					</tr>
				</form>
				</table>
				<b><a href="signup.php">New to KEC CORPS?Sign Up</a></b>
		</center>
	</body>
</html>	