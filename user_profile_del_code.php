<?php
include_once("connection.php");
$sql="delete from user_reg where email_id='".$_POST['emailid']."';";
$result=mysqli_query($con, $sql);

echo "<script>
alert('Deactivated successfully');
window.location='view_user.php'
	</script>";
?>