<html>

<?php
	include_once("header6.php");
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
				Organ Receiver Consent Form
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
						Required Organ:
						<select name="bg" required="required" class="form-control">
							<option value="heart">Heart</option><br/>
							<option value="kidney">Kidney</option><br/>
							<option value="eyes">Eyes</option><br/>
							<option value="lungs">Lungs</option><br/>
							<option value="pancreas">Pancreas</option><br/>
							<option value="small intestine">Small Intestine</option><br/>
							<option value="skin">Skin</option><br/>
							<option value="bone & cartilage ">Bone and cartilage</option><br/>
							<option value="other">Other</option><br/>							
						</select>
						<br>
					</div>	
					
					<div class="col-md-12">		
						Reason Of Organ Requirement:
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