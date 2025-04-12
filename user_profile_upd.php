<?php
include_once("connection.php");
//echo $_GET['tmail'];
?>
<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
		 body{
			background-image:url('/blood_bank/images/banner.jpg');
			background-size:100% 100%;
		} 
			.container{
			border:1px #bf925b;
			top:0;
			height:900px;
			width:600px;
			background-color:white;
}
  .thin-line-input{
			border:none;
			border-bottom:1px solid #ccc;
			padding:5px;
			width:500;
		}
</style>
</head>	

<?php
echo "<body>";
echo "<form action='user_profile_upd_code.php' method='post'>";
$sql="select * from user_reg where email_id='".$_GET['tmail']."';";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
echo"<br>";
echo"<br>";
echo "<div class='container'>";
echo"<br>";
echo "<CENTER><H5> UPDATE - PROFILE </H5> ";
echo" </center>";
echo"<br>";
echo" <b> User Id </b> ";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[user_id]' name='id' readonly required>";
echo"<br>";
echo"<br>";

echo "<b> Name </b>";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[name]' name='fullname'   required >";
echo"<br>";
echo"<br>";

echo "<b>Email Id</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[email_id]' name='emailid'  required >";
echo"<br>";
echo"<br>";

echo "<b>Contact</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[contact]' name='contact' >";
echo"<br>";
echo"<br>";
echo "<b>Password</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[password]' name='password'  />";
echo"<br>";
echo"<br>";
echo "<b>Confirm Password</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[confirm_password]' name='cpassword'  />";
echo"<br>";
echo"<br>";
echo "<b>Address</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[address]' name='address'  />";
echo"<br>";
echo"<br>";
echo "<b>Gender</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[gender]' name='gender'  />";
echo"<br>";
echo"<br>";
echo "<b>Blood Group</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[blood_group]' name='blood_group'  />";
echo"<br>";
echo"<br>";
echo  "<CENTER>";
echo "<button type='submit' class='btn btn-danger'><h5> Update</h5>
</button>";
echo "</center>";


echo "</form>";
echo "</body>";

?>
</html>