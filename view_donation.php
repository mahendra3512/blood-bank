<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
			/* body{
			background-image:url('/Home-fix-it/img/image4.jpg');
			background-size:100% 100%;
		} */
			.container{
			border:1px #bf925b;
			top:0;
			height:100%;
			width:700px;
			background-color:white;
}
  .thin-line-input{
			border:none;
			border-bottom:1px solid #ccc;
			padding:5px;
			width:400;
		}
		heading{
			background-color:red;
		}
</style>
</head>
<div class="content1">
	<div class="col-lg-12" >
		<form action="searchuser.php" method="post"><br>
		<center>
				<div class="col-md-4"></div>
				<div class="col-md-4">
			<input type="text" class="form-control" name="emailid" placeholder="Enter Email Id" id="emailid" autofocus autocomplete="off" size="30" required />
				<br>
				</div>
					</center>
				<div class="col-md-4"></div>

				<div class="col-md-12">
				<center>
					<input type="Submit" class="btn btn-danger" name="btn_search" value="Search" id="btn_search"/>
				</center>
				<br>
				</div>
		</form>


<?php
echo"<body>";
echo"<center>";
echo"<h3> LIST OF Donor's</h3> ";
echo"</center>";
echo"<div class='container'>";
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";

echo"<br>";echo"<br>";
echo"<table class='table table-bordered' width='680'height='100'>";
echo"<tr>";
	echo"<th>[bun]</th>";
	echo"<th>[vdno]</th>";
	echo"<th>[name]</th>";
	echo"<th>[dob]</th>";
	echo"<th>[gender]</th>";
	echo"<th>[fname]</th>";
	echo"<th>[occupation]</th>";
	echo"<th>[organisation]</th>";
	echo"<th>[address]</th>";
	echo"<th>[tel]</th>";
	echo"<th>[mobile]</th>";
	echo"<th>[email]</th>";
	echo"<th>[blood Group]</th>";
	/*echo"<th>[obd]</th>";
	echo"<th>[dId]</th>";
	echo"<th>[bg]</th>";
	echo"<th>[tom]</th>";
	echo"<th>[q1]</th>";
	echo"<th>[q2]</th>";
	echo"<th>[q3]</th>";
	echo"<th>[q4]</th>";
	echo"<th>[q5_a]</th>";
	echo"<th>[q5_b]</th>"; */
echo"</tr>";

$sql="select * from blood_donor_consent1;";
$results = mysqli_query($con,$sql);
//$row = mysqli_fetch_row($results);

while( $row=mysqli_fetch_array($results) )
{
	echo"<tr>";
	echo"<td> $row[0]</td>";
	echo"<td> $row[1]</td>";
	echo"<td> $row[2]</td>";
	echo"<td> $row[3]</td>";
	echo"<td> $row[4]</td>";
	echo"<td> $row[5]</td>";
	echo"<td> $row[6]</td>";
	echo"<td> $row[7]</td>";
	echo"<td> $row[8]</td>";
	echo"<td> $row[9]</td>";
	echo"<td> $row[10]</td>";
	echo"<td> $row[11]</td>";
	echo"<td> $row[14]</td>";
	echo"</tr>";
}

/*
	echo"<tr>";
	echo"<td> $row[bun] </td>";
	echo"<td> $row[vdno] </td>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[dob] </td>";
	echo"<td> $row[gender] </td>";
	echo"<td> $row[fname] </td>";
	echo"<td> $row[occupation] </td>";
	echo"<td> $row[organisation] </td>";
	echo"<td> $row[address] </td>";
	echo"<td> $row[tel] </td>";
	echo"<td> $row[mobile] </td>";
	echo"<td> $row[email] </td>";
	echo"<td> $row[obd] </td>";
	echo"<td> $row[dId] </td>";
	echo"<td> $row[bg] </td>";
	echo"<td> $row[tom] </td>";
	echo"<td> $row[q1] </td>";
	echo"<td> $row[q2] </td>";
	echo"<td> $row[q3] </td>";
	echo"<td> $row[q4] </td>";
	echo"<td> $row[q5_a] </td>";
	echo"<td> $row[q5_b] </td>";
*/
//echo"<th> <a href='user_profile_upd.php?tmail=$row[email_id]'> <button type='button' class='btn btn-success'style='width:100px;'>Edit</button>";
//echo"<th> <a href='user_profile_del.php?tmail=$row[email_id]'> <button type='button' class='btn btn-danger'style='width:100px;'>Delete</button>";
	echo"</tr>";
//}
echo"</table>";
mysqli_close($con);
echo"</div>";
echo"</body>";
echo"</form>";
?>
</html>

