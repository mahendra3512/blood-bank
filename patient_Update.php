<?php

	include_once("db.php");

	$sql="update Sign_up set name='".$_POST['fname']."',dob='".$_POST['dob']."',mobile='".$_POST['contact']."',Email='".$_POST['mail']."',Address='".$_POST['address']."' where  email='".$_SESSION['SESS']."'";
		
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Updated Successfully!');</script>";
		echo "<script>window.location = 'menu2.php';</script>";
	}

mysqli_close($con);
?>