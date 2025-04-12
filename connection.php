<?php
$con=mysqli_connect("localhost","root","","life_saver");
if(mysqli_connect_error($con))
{
	echo"Failed to connect to mysql.".mysqli_connect_error();
}

?>