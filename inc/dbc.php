 <?php
$conn = new mysqli("localhost","root","","kec_corps");
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$conn1=new mysqli("localhost","root","","kec_corps_academic");
if ($conn1->connect_error) 
{
    die("Connection failed: " . $conn1->connect_error);
}
$conn2 = new mysqli("localhost","root","","kec_corps_extracurricular");
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn2->connect_error);
}

?> 