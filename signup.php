<html>

<?php
	include_once("header3.php");
?>


<!-- ********************************************************************************************** -->
<form name="myForm" action="sign_up.php" method="post">

<div class="col-md-2"></div>
	<div class="col-md-8">	
		<div class = "panel panel-danger">
			<div class = "panel-heading">
				<h3 class = "panel-title">
					Sign Up
				</h3>
			</div>
			
		<div class = "panel-body">
			<div class="row">
				<div class="col-md-12">				
					Name:
					<input id="name" name="name" class="form-control" type="text" autofocus required=""/>
					<br>
				</div>
			
				<div class="col-md-6">
					Date Of Birth:
					<input id="dob" name="dob" class="form-control" type="date" required=""/>
				</div>

				<div class="col-md-6">
					Gender:
					<select name="gender" required="required" class="form-control">
						<option value="Male">Male</option><br/>
						<option value="Female">Female</option><br/>
					</select>
				</div>
				
				<div class="col-md-6">
					Occupation:
					<input id="occ" name="occ" class="form-control" type="text" required=""/>
					<br>
				</div>
				
				<div class="col-md-6">
					Organisation:
					<input id="org" name="org" class="form-control" type="text" required=""/>
					<br>
				</div>
		
				<div class="col-md-12">		
					Address Of Communication:
					<textarea class="form-control" name="add" id="add"></textarea>
					<br>	
				</div>
				
				<div class="col-md-6">
					Telephone(Landline):
					<input id="tel" name="tel" class="form-control" type="number"/>
					<br>
				</div>
				
				<div class="col-md-6">
					Mobile:
					<input id="mob" name="mob" class="form-control" type="number" required=""/>
					<br>
				</div>
		
				<div class="col-md-6">
					Email:
					<input id="email" name="email" class="form-control" type="mail" required=""/>
					<br>
				</div>
		
				<div class="col-md-6">
					Password:
					<input id="pwd" name="pwd" autocomplete="off" class="form-control" type="password" required=""/>
					<br>
				</div>
			</div>
			
			<div class="col-md-12">
				<p align="right"><input type="submit" class="btn btn-danger" id="submit" value="Register"></p>
			</div>
					
			</div>
		</div>
	</div>
</div>	
</form>

</body>
</html>