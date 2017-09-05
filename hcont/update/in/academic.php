<?php
require_once('../../../inc/dbc.php');
?>
<html>
	<head>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
var counter = 0;
$(function(){
 $('p#add_field').click(function(){
 counter += 1;
 $('#container').append(
 '<strong>Hobby No. ' + counter + '</strong><br />'
 + '<input id="field1_' + counter + '" name="dynfields1[]' + '" type="text" />' 
 + '<input id="field2_' + counter + '" name="dynfields2[]' + '" type="text" />' 
 + '<input id="field3_' + counter + '" name="dynfields3[]' + '" type="text" />'
 + '<input id="field4_' + counter + '" name="dynfields4[]' + '" type="text" />' 
 + '<input id="field5_' + counter + '" name="dynfields5[]' + '" type="text" /><br />');

 });
});
</script>

<body>

<?php
if (isset($_POST['submit_val'])) {
if ($_POST['dynfields3']) {
	echo count($_POST['dynfields1']);
echo $_POST['dynfields1'];
	/*foreach ( $_POST['dynfields'] as $key=>$value ) {
$values = mysql_real_escape_string($value);
$query = mysql_query("INSERT INTO my_hobbies (hobbies) VALUES ('$values')", $connection );

}*/
}

echo "<i><h2><strong>" . count($_POST['dynfields']) . "</strong> Hobbies Added</h2></i>";

 mysql_close();
}
?>
<?php if (!isset($_POST['submit_val'])) { ?>
 <center>
			<h2>KEC CORPS</h2>
			<hr><br><br>
		
 <form method="post" action="">

 <div id="container">
 <p id="add_field"><a href="#"><span>Click To Add Hobbies</span></a></p>
 </div>

 <input type="submit" name="submit_val" value="Submit" />
 </form>
<?php } ?>

</body>
</html>		