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
				<li><a style="cursor:pointer;" href="BloodDonor_admin.php">Blood Donor Consent</a></li>
				<li><a style="cursor:pointer;" href="BloodReceiver.php">Blood Receiver Consent</a></li>				
				
				<li><a style="cursor:pointer;" href="bloodstock.php">Blood Stock Information</a></li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Edit Info <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="cardinfo.php"> Card </a></li>
							<li><a href="bloodstockedit.php"> Blood Stock </a></li>
							<li><a href="view.php"> View Card info</a></li>							
						</ul>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="Logout.php">Logout</a></li>		
			</ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</body>