<?php

	include_once("db.php");

$sql="update stock set qty='".$_POST['qty']."' where bg='".$_POST['bg']."' and vol='".$_POST['vol']."'";
ECHo $sql;
	
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Updation Successful Successfully!');</script>";
		echo "<script>window.location = 'bloodstockedit.php';</script>";
	}

mysqli_close($con);
?>