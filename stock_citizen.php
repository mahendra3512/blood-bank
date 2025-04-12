<html>
<?php
	include_once("db.php");
	include_once("header2.php");
?>

<body>

<div class="content1">
	<div class="col-lg-12" >	
		<form id="form" id="form" name="form" method="post">
				<div class="col-md-4"></div>		
				<div class="col-md-4">			
					<input type="text" class="form-control" name="txt_detail" placeholder="Enter Blood Group" id="txt_detail" autofocus autocomplete="off" size="30" required />
					<br>
				</div>
					
				<div class="col-md-4"></div>
				
				<div class="col-md-12">
				<center>
					<input type="Submit" class="btn btn-danger" name="btn_search" value="Search" id="btn_search"/>
				</center>
				<br>
				</div>
		</form>		

		<div class="col-md-12" style="overflow:auto;">
			<table class="table table-bordered table-striped table-condensed">		
										
				<tr>
					<th>SL.No</th>
					<th>Blood Group</th>
					<th>Ml</th>					
					<th>Quantity Available</th>

				</tr>

				<?php
																	
					if(isset($_POST['txt_detail']))
					{									
						echo "<script>
						document.getElementById('txt_detail').value= '".$_POST['txt_detail']."';
					   </script>";
												  
						$cnt = 1;
						$qry = "select * from stock where bg='".$_POST['txt_detail']."'";
						$res = mysqli_query($con,$qry);
							
						//echo $qry;
							
						while($result = mysqli_fetch_array($res))
						{
							echo'
								<tr>	
									<td>'.$cnt.'</td>								
									<td>'.$result[1].'</td>
									<td>'.$result[2].'</td>
									<td>'.$result[3].'</td>
								</tr>							
									';
									$cnt = $cnt + 1;
						}
				
						if(mysqli_num_rows($res)== 0)
						{
							echo "
								<script>
								alert('Name Not Found.');
								document.getElementById('txt_detail').focus();
								window.location = 'Contract_Base_search.php';
								</script>
								";
						}
					}	
					
					else
					{
						$cnt = 1;
						$qry = "select * from stock";
						$res = mysqli_query($con,$qry);
						
						//echo $qry;
															
						while($result = mysqli_fetch_array($res))
						{					
							echo'
								<tr>
									<td>'.$cnt.'</td>
									<td>'.$result[1].'</td>
									<td>'.$result[2].'</td>
									<td>'.$result[3].'</td>											
								</tr>
									';
									
								$cnt = $cnt + 1;
						}
					}
				?>
			
			</table>
		</div>								
	</div>	
</div>
</body>
</html>