<?php

	include_once("db.php");

$sql="insert into sign_up
(name,dob,gender,occupation,organisation,address,tel,mobile,email,pwd)values('".$_POST['name']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['occ']."','".$_POST['org']."','".$_POST['add']."','".$_POST['tel']."','".$_POST['mob']."','".$_POST['email']."','".$_POST['pwd']."')";

	
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Account Registeration Successfull!');</script>";
		echo "<script>window.location = 'index.php';</script>";
	}

mysqli_close($con);
?>