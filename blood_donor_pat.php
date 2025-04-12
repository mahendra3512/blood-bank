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

$sql="insert into blood_donor_consent1(vdno,name,dob,gender,fname,occupation,organisation,address,tel,mobile,email,obd,dld,bg,tom,q1,q2,q3,q4,q5_a,q5_b,q5_c,q5_d,q5_e,q6_a,q6_b,q6_c,q7_a,q7_b,q7_c,q7_d,q7_e,q7_f,q7_g,q7_h,q7_i,q7_j,q7_k,q7_l,q8,q9,q10,q11_a,q11_b,q11_c,q11_d)values('".$_POST['vdno']."','".$_POST['name']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['fname']."','".$_POST['occ']."','".$_POST['org']."','".$_POST['add']."','".$_POST['tel']."','".$_POST['mob']."','".$_POST['email']."','".$_POST['obd']."','".$_POST['d_date']."','".$_POST['bg']."','".$_POST['meal']."','".$_POST['health1']."','".$_POST['health2']."','".$_POST['health3']."','".$_POST['health4']."','".$a[1]."','".$a[2]."','".$a[3]."','".$a[4]."','".$a[5]."','".$a[6]."','".$a[7]."','".$a[8]."','".$a[9]."','".$a[10]."','".$a[11]."','".$a[12]."','".$a[13]."','".$a[14]."','".$a[15]."','".$a[16]."','".$a[17]."','".$a[18]."','".$a[19]."','".$a[20]."','".$_POST['health5']."','".$_POST['health6']."','".$_POST['health7']."','".$_POST['health8']."','".$_POST['health9']."','".$_POST['health10']."','".$_POST['health11']."')";

//$sql="insert into stock(bg,vol,qty)values('".$_POST['bg2']."','".$_POST['qty']."',)"

//echo $sql;
	
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Submitted Successfully!');</script>";
		echo "<script>window.location = 'BloodDonor.php';</script>";
	}

mysqli_close($con);
?>