<?php
include_once("connection.php");
error_reporting(0);
$sql="insert into admin (admin_id,name,email,pwd) values('".$_POST['id']."','".$_POST['name']."','".$_POST['emailid']."','".$_POST['password']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"Insertion Failed";
else
	echo"<script>
window.location='add_admin.php';
alert('Addedd One More Memeber Sucessfully');
</script>";
mysqli_close($con);
?>
