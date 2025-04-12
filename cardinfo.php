<html>

<?php
	include_once("header.php");
?>

<!-- ******************************************************************************************* -->
<form name="myForm" action="cardinfo_edit.php" method="post">

<div class="col-md-2"></div>
	<div class="col-md-8">	
		<div class = "panel panel-danger">
			<div class = "panel-heading">
				<h3 class = "panel-title">
					Blood Donation Card
				</h3>
			</div>
			
		<div class = "panel-body">
			<div class="row">

				<div class="col-md-12">
					VD No:
					<input name="vdno" class="form-control" type="number" required=""/>
					<br>
				</div>			
			
				<div class="col-md-12">
					Name:
					<input name="name" class="form-control" type="text" required=""/>
					<br>
				</div>

				<div class="col-md-12">
					Address:
					<textarea class="form-control" name="add" id="add"></textarea>
					<br>
				</div>				
			
				<div class="col-md-6">
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
			
				<div class="col-md-6">
					Contact:
					<input name="tel" class="form-control" type="number" required=""/>
					<br>
				</div>


<table class="table table-bordered table-striped table-condensed">		
	<tr>
		<th>Date</th>
		<th>Weight</th>
		<th>BP</th>					
		<th>HB</th>
		<th>HIV</th>
		<th>HbsAg</th>
		<th>HCV</th>					
		<th>VDRL</th>
		<th>MP</th>
	</tr>

		<td><input name="date" class="form-control" type="date" required=""/></td>
		<th><input name="wt" class="form-control" type="number" required=""/></th>
		<th><input name="bp" class="form-control" type="number" required=""/></th>		
		<th><input name="hb" class="form-control" type="number" required=""/></th>
		<th><input name="hiv" class="form-control" type="number" required=""/></th>
		<th><input name="hbsag" class="form-control" type="number" required=""/></th>
		<th><input name="hcv" class="form-control" type="number" required=""/></th>		
		<th><input name="vdrl" class="form-control" type="number" required=""/></th>
		<th><input name="mp" class="form-control" type="number" required=""/></th>	

</table>
				
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