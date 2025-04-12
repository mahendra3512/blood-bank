<?php

	include_once("db.php");

$sql="insert into cardinfo
(vdno,name,address,bg,contact,date,wt,bp,hb,hiv,hbsag,hcv,vdrl,mp)values('".$_POST['vdno']."','".$_POST['name']."','".$_POST['add']."','".$_POST['bg']."','".$_POST['tel']."','".$_POST['date']."','".$_POST['wt']."','".$_POST['bp']."','".$_POST['hb']."','".$_POST['hiv']."','".$_POST['hbsag']."','".$_POST['hcv']."','".$_POST['vdrl']."','".$_POST['mp']."')";

	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Submitted Successfully!');</script>";
		echo "<script>window.location = 'cardinfo.php';</script>";
	}

mysqli_close($con);
?>