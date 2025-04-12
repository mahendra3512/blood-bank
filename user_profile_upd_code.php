<?php
include_once("connection.php");
$sql="update user_reg set name='".$_POST['fullname']."',email_id='".$_POST['emailid']."',contact='".$_POST['contact']."',password='".$_POST['password']."',confirm_password='".$_POST['cpassword']."',address='".$_POST['address']."',gender='".$_POST['gender']."',blood_group='".$_POST['blood_group']."'where email_id='".$_POST['emailid']."';";
$result=mysqli_query($con, $sql);
echo "<script>
alert('Updated successfully');
window.location='view_user.php'
</script>";
?>