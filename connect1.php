<?php

	include_once("db.php");

	$sql="select * from sign_up where email='".$_POST['email1']."' and pwd='".$_POST['password1']."'";
	$result=mysqli_query($con,$sql); //true if Succedded

	//echo $sql;
	
	if(mysqli_num_rows($result) == 1) //Fetch atleast 1 row from db
	{			
		$_SESSION['SESS'] = $_POST['email1'];
		echo "<script>window.location = 'menu2.php';</script>"; //Login Successful
	}
	else
	{
		echo "<script>alert('Invalid Details');</script>";
		echo "<script>window.location = 'index.php';</script>";
	}
mysqli_close($con);
?>