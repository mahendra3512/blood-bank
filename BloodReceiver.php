<html>

<?php
	include_once("header3.php");
?>

<!-- ********************************************************************************************** -->

<script>
	function myFunction() 
	{
		var d = new Date();
		document.getElementById("demo").value = d.toDateString();
	}
</script>

<body onload="myFunction()">
	<form name="myForm" action="blood_receiver.php" method="post">

<div class="col-md-3"></div>
	<div class="col-md-6">	
		<div class = "panel panel-danger">
			<div class = "panel-heading">
				<h3 class = "panel-title">
					Blood Receiver Consent Form
				</h3>
			</div>
			
			<div class = "panel-body">
				<div class="row">

					
					<div class="col-md-3">				
						<input id="demo" readonly style ="border: none" name="demo" type="text" required=""/></p>
						<br>	
					</div>
					
					<div class="col-md-12">				
						Name:
						<input id="name" name="name"  class="form-control" type="text" autofocus required=""/>
						<br>
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
			
					<div class="col-md-12">
						Email:
						<input id="email" name="email" class="form-control" type="mail" required=""/>
						<br>
					</div>
			
					<div class="col-md-12">
						Required Blood Group:
						<select name="bg" required="required" class="form-control">
							<option value="O-">O-</option><br/>
							<option value="O+">O+</option><br/>
							<option value="A-">A-</option><br/>
							<option value="A+">A+</option><br/>
							<option value="B-">B-</option><br/>
							<option value="B+">B+</option><br/>
							<option value="AB-">AB-</option><br/>
							<option value="AB+">AB+</option><br/>						
						</select>
						<br>
					</div>	
					
					<div class="col-md-12">		
						Reason Of Blood Requirement:
						<textarea class="form-control" name="reason" id="reason"></textarea>
						<br>	
					</div>				
					
				</div>
				
				<div class="col-md-12">
					<p align="right"><input type="submit" class="btn btn-danger" id="submit" value="Apply"></p>
				</div>				
			</div>
		</div>
	</div>
</div>	
</form>

</body>
</html>