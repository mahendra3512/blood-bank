<?php
include_once("connection.php");
echo "E-mail : ".$_POST['emailid'];

$sql="select * from user_reg where email_id='".$_POST['emailid']."' and password='".$_POST['password']."'";
$results=mysqli_query($con, $sql);
if($row=mysqli_fetch_array($results))
{
	echo"<script> 
	window.location='user_dashboard.php';
	</script>";
}
else
	echo"<script>
		window.location='user_login.php';
		alert('Invalid Email Id or Password');
		</script>";
mysqli_close($con);
?>
