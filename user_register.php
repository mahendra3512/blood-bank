<?php
include_once("connection.php");

$sql="insert into user_reg(name,email_id,contact,password,confirm_password,address,gender,blood_group)values('".$_POST['fullname']."','".$_POST['emailid']."','".$_POST['contact']."','".$_POST['password']."','".$_POST['cpassword']."','".$_POST['address']."','".$_POST['gender']."','".$_POST['blood_group']."')";
$results=mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script> 
		alert('Registration failed');
		window.location='user_register.php';
		</script>";
else
	echo"<script> 
		window.location='user_login.php';
		alert('Registerd sucessfully');
		</script>";
mysqli_close($con);
?>





