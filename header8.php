<head>
<title>Life Saver</title>

	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<script src="js/jquery.min.js"> </script>	
	<script src="js/bootstrap.js"></script>	
	<link href="css/men.css" rel='stylesheet' type='text/css' />
	<link href="css/carousel.css" rel='stylesheet' type='text/css' />		
	<link rel="shortcut icon" type="image/x-icon" href="blood_drop.png"/>
</head>

<body>

	<br>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  
		  <a class="navbar-brand" href="index.php">Life Saver</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a style="cursor:pointer;" href="BloodDonor.php">Blood Donor Consent</a></li>
				<li><a style="cursor:pointer;" href="BloodReceiver.php">Blood Receiver Consent</a></li>
				<li><a style="cursor:pointer;" data-toggle="modal" data-target="#myModal">Edit Profile</a></li>
				<li><a style="cursor:pointer;" href="donatebloody.php">Why should we donate blood?</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="Logout.php">Logout</a></li>		
			</ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	

<?php
		if (isset($_SESSION['SESS']))
		{	
			$sql="select * from sign_up where email='".$_SESSION['SESS']."'";
			$res=mysqli_query($con,$sql);
			$result=mysqli_fetch_array($res);	
		}
?>
	
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" >
	  
		<form id="myForm" name="myForm" action="patient_Update.php" method="post" enctype="multipart/form-data" >
			<div class="modal-content" >
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Update Account</h4>
				</div>
			  
				<div class="modal-body">					
					
					<div>						
						Name 
							<input type="text" name="fname" id="fname" value="<?php echo $result[0] ?>" tabindex="2" class="form-control" required autofocus >
					</div>
					
					<div>
						Date Of Birth
							<input type="date" name="dob" class="form-control" id="dob" tabindex="5" value="<?php echo $result[1] ?>" required>
					</div>

					
					<div>
						Contact <span style="color:red">*</span>
							<input type="text" name="contact" class="form-control" id="contact" tabindex="8" value="<?php echo $result[7] ?>" required>
					</div>
					
					<div>
						Email <span style="color:red">*</span>
							<input type="email" name="mail" class="form-control" id="mail" value="<?php echo $result[8] ?>" required tabindex="9">
					</div>
					
					<div>
						Address <span style="color:red">*</span> </label>
							<textarea required tabindex="10" class="form-control" style="resize:none" id="address" name="address"><?php echo $result[5] ?></textarea>
					</div>
					
				</div>
			
			<div class="modal-footer">
				<input type="Submit" value="Update" class="btn btn-primary"/>			
			</div>
			  
			</div>
		</form>	
	</div>
</div>
	
</body>