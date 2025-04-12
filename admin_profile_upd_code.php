<?php
include_once("connection.php");
$sql="update admin set name='".$_POST['name']."',email='".$_POST['emailid']."',pwd='".$_POST['password']."' where admin_id='".$_POST['id']."';";
$result=mysqli_query($con, $sql);
echo "<script>
alert('Updated successfully');
window.location='view_admin.php'
</script>";
?>