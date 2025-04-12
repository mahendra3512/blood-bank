<?php
include_once("connection.php");

echo"<body>";
echo"<div class='container'>";
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from user_reg where email_id='".$_POST['emailid']."';";
$results=mysqli_query($con, $sql);
echo"<br>";echo"<br>";
echo"<table class='table table-bordered' width='680'height='100'>";
echo"<tr>";
echo"<th>  Id </th>";
echo"<th> Name </th>";
echo"<th> Email </th>";
echo"<th> contact </th>";
echo"<th> Password </th>";
echo"<th>Confirm Password </th>";
echo"<th> Address </th>";
echo"<th> Gender </th>";
echo"<th>Blood Group</th>";
echo"<th> Edit </th>";
echo"<th> Delete </th>";
echo"</tr>";

while($row=mysqli_fetch_array($results))
{
	echo"<tr>";
	echo"<td> $row[user_id] </td>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[email_id]</td>";
	echo"<td> $row[contact] </td>";
	echo"<td> $row[password] </td>";
	echo"<td> $row[confirm_password] </td>";
	echo"<td> $row[address] </td>";
	echo"<td> $row[gender] </td>";
	echo"<td> $row[blood_group] </td>";
	
echo"<td> <a href='user_profile_upd.php?tmail=$row[email_id]'> <button type='button' class='btn btn-success'style='width:100px;'>Edit</button>";
echo"<td> <a href='user_profile_del.php?tmail=$row[email_id]'> <button type='button' class='btn btn-danger'style='width:100px;'>Delete</button>";
	echo"</tr>";
}
echo"</table>";
mysqli_close($con);
echo"</div>";
echo"</body>";
echo"</form>";