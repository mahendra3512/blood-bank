<?php
include_once("connection.php");
echo "E-mail : ".$_POST['emailid'];

$sql="select * from admin where email='".$_POST['emailid']."' and pwd='".$_POST['password']."'";
$results=mysqli_query($con, $sql);
if($row=mysqli_fetch_array($results))
{
	echo"<script> 
	window.location='admin_dashboard.php';
	</script>";
}
else
	echo"<script>
		window.location='signin.php';
		alert('Invalid Email Id or Password');
		</script>";
//echo"window.location='user_login.php';
mysqli_close($con);
?>
