<?php
require_once("../../inc/admincon.php");
?>
<html>
	<body bgcolor="powderblue">
		<center>
		<h3>Update Batch Details</h3>
		<hr>
		<form name="import" method="post" enctype="multipart/form-data">
			<input type="file" name="file" /><br />
			<input type="submit" name="submit" value="Submit" />
		</form>
		</center>
		<?php
		if(isset($_POST["submit"]))
		{
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
				$username = $filesop[0];
				$phone = $filesop[1];
				$sql="INSERT INTO `active_info` (`username`, `phone`) VALUES ('".$username."','".$phone."')";
				$result=$conn->query($sql);
			}
			if($result)
			{
				echo "Successfully Imported..";
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