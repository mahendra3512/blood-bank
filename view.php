<html>
<?php
	include_once("db.php");
	include_once("header.php");
?>

<body>

<div class="content1">
	<div class="col-lg-12" >	
		<form id="form" id="form" name="form" method="post">
				<div class="col-md-4"></div>		
				<div class="col-md-4">			
					<input type="text" class="form-control" name="txt_detail" placeholder="Enter VD No" id="txt_detail" autofocus autocomplete="off" size="30" required />
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
					<th>Sl.No</th>
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

				<?php
																	
					if(isset($_POST['txt_detail']))
					{									
						echo "<script>
						document.getElementById('txt_detail').value= '".$_POST['txt_detail']."';
					   </script>";
												  
						$cnt = 1;
						$qry = "select * from cardinfo where vdno='".$_POST['txt_detail']."' order by id desc";
						$res = mysqli_query($con,$qry);
							
						//echo $qry;
							
						while($result = mysqli_fetch_array($res))
						{
							echo'
								<tr>	
									<td>'.$cnt.'</td>								
									<td>'.$result[6].'</td>
									<td>'.$result[7].'</td>
									<td>'.$result[8].'</td>
									<td>'.$result[9].'</td>
									<td>'.$result[10].'</td>
									<td>'.$result[11].'</td>
									<td>'.$result[12].'</td>
									<td>'.$result[13].'</td>
									<td>'.$result[14].'</td>									
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
								window.location = 'view.php';
								</script>
								";
						}
					}
				?>
			
			</table>
		</div>								
	</div>	
</div>
</body>
</html>