<?php
include_once("connection.php");
$sql="insert into contact(name,phone,email,message) values('".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['message']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script> 
		alert('Plz Check The Information');
		window.location='contact.html';
		</script>";
else
	echo"<script> 
		window.location='contact.php';
		alert('WE WILL GET BACK TO YOU');
		</script>";
mysqli_close($con);
?>