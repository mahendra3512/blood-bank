<?php

	include_once("db.php");

	$a="";	
	
	for($i=1;$i<=5;$i++)
	{
			$chk="";
			
			$chk="chk".$i;
			//echo "<script> alert('".$chk."') </script>";
			
			if(isset($_POST[$chk]))
			{
				$a[$i]=$_POST[$chk];
			}
			else
			{
				$a[$i]="";
			}
	}
	
	for($i=6;$i<=8;$i++)
	{
			$chk="";
			//echo "<script> alert('".$chk."') </script>";
			
			$chk="chk".$i;
			
			if(isset($_POST[$chk]))
			{
				$a[$i]=$_POST[$chk];
			}
			else
			{
				$a[$i]="";
			}
	}

	for($i=9;$i<=20;$i++)
	{
			$chk="";
			//echo "<script> alert('".$chk."') </script>";
			
			$chk="chk".$i;
			
			if(isset($_POST[$chk]))
			{
				$a[$i]=$_POST[$chk];
			}
			else
			{
				$a[$i]="";
			}
	}	

$sql="insert into blood_donor_consent2(name,dob,gender,fanme,occupation,organisation,address,tel,mobile,email,obd,dlg,bl)values('".$_POST['name']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['fname']."','".$_POST['occ']."','".$_POST['org']."','".$_POST['add']."','".$_POST['tel']."','".$_POST['mob']."','".$_POST['email']."','".$_POST['obd']."','".$_POST['d_date']."','".$_POST['bg']."')";

//$sql="insert into stock(bg,vol,qty)values('".$_POST['bg2']."','".$_POST['qty']."',)"

//echo $sql;
	
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Submitted Successfully!');</script>";
		echo "<script>window.location = 'blood_donor_req.php';</script>";
	}

mysqli_close($con);
?>