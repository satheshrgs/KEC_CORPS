<?php
require_once("../../inc/admincon.php");
?>
<html>
	<body bgcolor="powderblue">
		<center>
		<h3>Remove Student</h3>
		<hr>
		<form name="import" method="post" enctype="multipart/form-data">
			<input type="text" name="rno" /><br />
			<input type="submit" name="submit" value="Submit" />
		</form>
		</center>
		<?php
		if(isset($_POST["submit"]))
		{
			$rno=$_POST["rno"];
			$sql="DELETE FROM `active_info` WHERE `username`='".$rno."'";
			$result=$conn->query($sql);
			if($result)
			{
				echo "Successfully Deleted..";
			}
			else
			{
				echo "Sorry! There is some problem.";
			}

		}
		?>
</div>
</body>
</html>