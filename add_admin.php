<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
		body{
		background-color:#d9534f;
	}
		.container{
		height:560px;
		width:700px;
		background-color:white;
		font-size:18px;
		border-radius:10px;
		}
</style>
</head>
<body>
<form action="add_member.php" method="post">
<br> <br> 
<div class="container"><br>
<center> <h3><font color="d9534f">Add Admin </h3></center></font><br>
<b> Employee Id :</b>
<input type="number" class="form-control" style="width:600px;" name="id">
<br>
<b> Name :</b>
<input type="text" class="form-control" style="width:600px;" name="name">
<br>
<b> Email Id :</b>
<input type="text" class="form-control" style="width:600px;" name="emailid">
<br>
<b> Password :</b>
<input type="number" class="form-control" style="width:600px;" name="password"><br><center>
<button type='submit' class='btn btn-danger'style='width:100px;'>Submit</button></center>
</div>
</form>
</body>
</html>