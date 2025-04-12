<?php
session_start();

$con=mysqli_connect("localhost","root","","Life_saver");

if(mysqli_connect_errno())
{
	echo "failed";
	mysqli_connect_error();
}

?>