<?php

	include_once("db.php");

	$sql="select * from Admin where Email='".$_POST['email']."' and Pwd='".$_POST['password']."'";
	$result=mysqli_query($con,$sql); //true if Succedded

	if(mysqli_num_rows($result) == 1) //Fetch atleast 1 row from db
	{			
		$_SESSION['SESS'] = $_POST['email'];
		echo "<script>window.location = 'menu.php';</script>"; //Login Successful
	}
	else
	{
		echo "<script>alert('Invalid Details');</script>";
		echo "<script>window.location = 'index.php';</script>";
	}
mysqli_close($con);
?>