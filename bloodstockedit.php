<html>

<?php
	include_once("header.php");
?>

<!-- ******************************************************************************************* -->
<form name="myForm" action="bloodstock_edit.php" method="post">

<div class="col-md-4"></div>
	<div class="col-md-4">	
		<div class = "panel panel-danger">
			<div class = "panel-heading">
				<h3 class = "panel-title">
					Stock Updation
				</h3>
			</div>
			
		<div class = "panel-body">
			<div class="row">

				<div class="col-md-12">
					Blood Group:
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
					Volume(ml):
					<select name="vol" required="required" class="form-control">
						<option value="100">100ml</option><br/>
						<option value="350">350ml</option><br/>
					</select>
					<br>
				</div>

				<div class="col-md-12">
					Quantity:
					<input name="qty" class="form-control" type="number" required=""/>
					<br>
				</div>
				
				<div class="col-md-12">
					<p align="right"><input type="submit" class="btn btn-danger" id="submit" value="Submit"></p>
				</div>
					
			</div>
		</div>
	</div>
</div>	
</form>

</body>
</html>