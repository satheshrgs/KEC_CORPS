<?php
session_start();
$un=$_SESSION['un'];
require_once('../../../inc/dbc.php');
$sql="select * from personal_info where username='".$un."'";
$res=$conn->query($sql);
$r=$res->fetch_assoc();
if(isset($_POST['update']))
{
	$addr1=$_POST['addr1'];
	$addr2=$_POST['addr2'];
	$addr3=$_POST['addr3'];
	$addr4=$_POST['addr4'];
	$bg=$_POST['bg'];
	$dob=$_POST['dob'];
	$sql="UPDATE `personal_info` SET `bg`='".$bg."',`dob`='".$dob."',`address_line1`='".$addr1."',`address_line2`='".$addr2."',`address_line3`='".$addr3."',`address_line4`='".$addr4."' WHERE username='".$un."'";
	$res=$conn->query($sql);
	sleep(2);
	header('Location:personal.php');
}
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
						<td colspn="2"><b>Address:</b></td>
					</tr>
					<tr>
						<td>House No. and Street Name</td>
						<td><input type="text" name="addr1" value=<?php echo $r['address_line1'] ?>></td>
					</tr>
					<tr>
						<td>Village or town or City</td>
						<td><input type="text" name="addr2"  value=<?php echo $r['address_line2'] ?>></td>
					</tr>
					<tr>
						<td>District</td>
						<td><input type="text" name="addr3"  value=<?php echo $r['address_line3'] ?>></td>
					</tr>
					<tr>
						<td>State</td>
						<td><input type="text" name="addr4"  value=<?php echo $r['address_line4'] ?>></td>
					</tr>
					<tr>
						<td>Blood Group</td>
						<td><input type="text" name="bg"  value=<?php echo $r['bg'] ?>></td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td><input type="date" name="dob"  value=<?php echo $r['dob'] ?>></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" value="Update" name="update"></td>
					</tr>
				</form>
				</table>
				
		</center>
	</body>
</html>