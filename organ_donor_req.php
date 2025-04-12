<html>

<?php
	include_once("header6.php");
?>

<script>
	function un()
	{
		var val1 = document.getElementById('bg').value;
		document.getElementById('bg2').value=val1;
	}
	
	function randomString()
	 {
		var chars = "0123456789";
		var string_length = 5;
		var randomstring = '';
		for (var i=0; i<string_length; i++) 
		{
			var rnum = Math.floor(Math.random() * chars.length);
			randomstring += chars.substring(rnum,rnum+1);
		}
		document.myForm.vdno.value = randomstring;
	}
	
</script>

<!-- ******************************************************************************************* -->
<form name="myForm" action="blood_donor_pat.php" method="post">

<div class="col-md-2"></div>
	<div class="col-md-8">	
		<div class = "panel panel-danger">
			<div class = "panel-heading">
				<h3 class = "panel-title">
					Organ Donor Consent Form
				</h3>
			</div>
			
		<div class = "panel-body">
			<div class="row">

			<!--	<div class="col-md-4">				
					VD No:
					<input id="vdno" name="vdno" class="form-control" type="text" readonly required=""/>
					<br>
				</div>	-->		
			
				<!--<div class="col-md-12">
					<p align="left"><input type="button" class="btn btn-danger" id="submit" value="Generate" onClick="randomString();"></p>
				</div>	-->		
			
				<div class="col-md-12">				
					Name:
					<input id="name" name="name" class="form-control" type="text" autofocus required=""/>
					<br>
				</div>
			
				<div class="col-md-4">
					Date Of Birth:
					<input id="dob" name="dob" class="form-control" type="date" required=""/>
				</div>

				<div class="col-md-3">
					Gender:
					<select name="gender" required="required" class="form-control">
						<option value="Male">Male</option><br/>
						<option value="Female">Female</option><br/>
					</select>
				</div>

				<div class="col-md-5">
					Father's Name:
					<input id="fname" name="fname" class="form-control" type="text" required=""/>
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
				
					<div class="col-md-3">
						Telephone:
						<input id="tel" name="tel" class="form-control" type="number" required=""/>
						<br>
					</div>
				
					<div class="col-md-3">
						Mobile:
						<input id="mob" name="mob" class="form-control" type="number" required=""/>
						<br>
					</div>
		
					<div class="col-md-6">
						Email:
						<input id="email" name="email" class="form-control" type="mail" required=""/>
						<br>
					</div>
		
				<div class="col-md-4">
					Organ Donating :
					<input id="obd" name="obd" class="form-control" type="text" required=""/>
					<br>
				</div>
				
				<div class="col-md-4">
					Date Of Last Donated:
					<input id="d_date" name="d_date" class="form-control" type="date" />
					<br>
				</div>
		
				<div class="col-md-4">
					Blood Group:
					<input id="bg" name="bg" autocomplete="off" class="form-control" type="text" onkeyup="javascript:{this.value = this.value.toUpperCase();un();}" required=""/>
					<br>
				</div>
		
			
			<div class="col-md-12">
						<p align="right"><input type="submit" class="btn btn-danger" id="submit" value="Submit"></p>
					</div>
				
			</div>	
		</div>

		
<!--<br><br>
<h2><u>Videos</u></h2>

<center>
<video width="620" controls>
  <source src="Red Cross How To Save a Life.mp4" type="video/mp4">
</video>
</center>		
<!-- ********************************************************************************************* -->
		
<!--	<div class = "panel panel-danger">
			<div class = "panel-heading">
				<h3 class = "panel-title">
					Physical Examination (Blood Bank use Only)
				</h3>
			</div>
			
		<div class = "panel-body">
			<div class="row">

				<div class="col-md-3">			
					Date Of Donation:
					<input id="dod" name="dod" class="form-control" type="date" required=""/>
					<br>
				</div>

				<div class="col-md-3">				
					Weight(Kgs):
					<input id="weight" name="weight" class="form-control" type="number" required=""/>
					<br>
				</div>
			
					<div class="col-md-3">
						Temp(C):
						<input id="temp" name="temp" class="form-control" type="number" required=""/>
					</div>

					<div class="col-md-3">
						Pulse/Minute:
						<input id="pulse" name="pulse" class="form-control" type="number" required=""/>
						<br>
					</div>
				
					<div class="col-md-3">
						Blood Pressure(mm Hg):
						<input id="bp" name="bp" class="form-control" type="number" required=""/>
						<br>
					</div>
				
					<div class="col-md-3">
						Haemoglobin(Gms/dl.):
						<input id="hg" name="hg" class="form-control" type="number" required=""/>
						<br>
					</div>
						
					<div class="col-md-3">
						Fit For Donation:
						<select name="ffd" class="form-control">
							<option>Yes</option>
							<option>No</option>
						</select>
						<br>
					</div>
					
					<div class="col-md-3">
						Blood Bag No:
						<input id="bbn" name="bbn" class="form-control" type="number" required=""/>
						<br>
					</div>				

					<div class="col-md-3">
						lot No:
						<input id="lotno" name="lotno" class="form-control" type="number" required=""/>
						<br>
					</div>
					
					<div class="col-md-3">
						Expiry Date:
						<input id="exp" name="exp" class="form-control" type="date" required=""/>
						<br>
					</div>
					
					<div class="col-md-3">
						Quantity in ML:
						<input id="qty" name="qty" class="form-control" type="number" required=""/>
						<br>
					</div>		
					
					<div class="col-md-3">
						Segment No:
						<input id="seg" name="seg" class="form-control" type="number" required=""/>
						<br>
					</div>

					<div class="col-md-3">
						Blood Group:
						<input id="bg2" name="bg2" class="form-control" readonly type="text" required=""/>
						<br>
					</div>
					
					<div class="col-md-3">
						Rh Factor:
						<input id="rh" name="rh" class="form-control" type="number" required=""/>
						<br>
					</div>						
					
					<div class="col-md-3">
						HIVI & II:
						<input id="h1ni" name="h1n1" class="form-control" type="number" required=""/>
						<br>
					</div>				

					<div class="col-md-3">
						HBsAg:
						<input id="hbs" name="hbs" class="form-control" type="number" required=""/>
						<br>
					</div>
					
					<div class="col-md-3">
						HCV:
						<input id="hcv" name="hcv" class="form-control" type="number" required=""/>
						<br>
					</div>
					
					<div class="col-md-3">
						VDRL:
						<input id="vdrl" name="vdrl" class="form-control" type="number" required=""/>
						<br>
					</div>							

					<div class="col-md-3">
						MP:
						<input id="mp" name="mp" class="form-control" type="number" required=""/>
						<br>
					</div>	
					
					<div class="col-md-3">
						MP:
						<input id="mp" name="mp" class="form-control" type="number" required=""/>
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
-->
</body>
</html>