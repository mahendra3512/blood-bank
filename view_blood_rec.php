<?php
echo"<body>";
echo"<center>";
echo"<h3> LIST OF RECIPIENTS</h3> ";
echo"</center>";
include_once("connection.php");  
$sql="select * from blood_receiver;";
$results=mysqli_query($con, $sql);
echo"<table border='1'>";
echo"<tr>";
echo"<th> Date </th>";
echo"<th> Name </th>";
echo"<th> Occupation </th>";
echo"<th> Organisation </th>";
echo"<th> Address </th>";
echo"<th> Telephone </th>";
echo"<th>Mobile </th>";
echo"<th>Email </th>";
echo"<th>Required Blood/Organ </th>";
echo"<th>Reason </th>";
echo"</tr>";
while($row=mysqli_fetch_array($results))
{
	echo"<tr>";
	echo"<td> $row[datee]</td>";
	echo"<td> $row[name]</td>";
	echo"<td> $row[occupation]</td>";
	echo"<td> $row[organisation]</td>";
	echo"<td> $row[address]</td>";
	echo"<td> $row[tel]</td>";
	echo"<td> $row[mobile]</td>";
	echo"<td> $row[email]</td>";
	echo"<td> $row[bg]</td>";
	echo"<td> $row[reason]</td>";
	echo"</tr>";
}
echo"</table>";

mysqli_close($con);
?>

