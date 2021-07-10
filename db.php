<?php
$conn= mysqli_connect("localhost","root","");
if(!$conn)
{
	die("Failed to connect sql server!!!". mysqli_error());
}
mysqli_select_db($conn,"bank");
?>