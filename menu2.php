<html>
<?php
	include_once("db.php");
	include_once("header8.php");

	
		//session_start();
		if(!isset($_SESSION['SESS']))
		{
			echo"<script>alert('Login to access this page'); window.location = 'index.php';</script>";
		}
	
?>
<style>
big 
{
    line-height: 200%;
}
</style>

<h2><u>Instructions:</u></h2>

<div class="big">
<h4>
1.	Donor Motivation and Donor Counselling.<br><br>
2.	Donor Recruitment -Voluntary and Replacement.<br><br>
3.	Donor Blood  Collection Inhouse and Mobile Camps .<br><br>
4.	Blood Group Serology-ABO/RH   for Patient/Donor.<br><br>
5.	Pre Transfusion Testing .<br><br>
6.	Compatibility testing ABO/RH    Semi and fully Automated.<br><br>
7.	Antibody screening  and Identification .<br><br>
8.	Antibody screening Diagnostic .<br>
o	Direct Coombs.<br>
o	Indirect Coombs.<br><br>
9.	Phenotyping for Thallesemia Pts.<br><br>
10.	RH Screening for Transfusion Transmitted Infections  for Blood donors.<br>
o	Elisa for HIV.<br>
o	Elisa  for HBSAg.<br>
o	Elisa for HCV.<br>
o	RPR for syphilis.<br>
o	Malaria Antigen .<br><br>
11.	Nucleic Acid Testing _NAT Testing .<br>
o	HIV.<br>
o	HBV.<br>
o	HCV.<br><br>
12.	Blood Processing - Component Separation.<br>
o	Packed Red Blood Cells PRBC.<br>
o	Leucoreduced Packed Red Blood Cells  L PRBC.<br>
o	Platelet Concentrate PC.<br>
o	Leucoreduced Platelet Concentrate  L PC.<br>
o	Platelet  Rich Plasma  PRP.<br>
o	Fresh Frozen Plasma   FFP .<br>
o	Cryoprecipitate .<br><br>
13.	Aphaeresis -Single Donor Plateletpheresis  SDP .<br><br>
14.	Blood Quarantine and Blood Storage.<br><br>
15.	Neonatal Exchange Transfusion .<br><br>
16.	Issue of Blood  and Blood products .<br><br>
17.	Therapeutic Phlebotomy.<br><br>
18.	Blood Donation camps.<br><br>
19.	Quality Management and Participation in EQAS.<br><br>
</h4>
</div>

<br><br>
<h2><u>Videos</u></h2>

<center>
<video width="620" controls>
  <source src="Story About a Drop of Blood (1).mp4" type="video/mp4">
</video>
</center>

</body>
</html>