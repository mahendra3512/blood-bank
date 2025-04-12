<?php

	include_once("db.php");

	$sql="insert into blood_receiver
	(datee,name,occupation,organisation,address,tel,mobile,email,bg,reason)values('".$_POST['demo']."','".$_POST['name']."','".$_POST['occ']."','".$_POST['org']."','".$_POST['add']."','".$_POST['tel']."','".$_POST['mob']."','".$_POST['email']."','".$_POST['bg']."','".$_POST['reason']."')";

	
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		email_send($_POST['email']);
		echo "<script>alert('Application Sent Successfull!');</script>";
		echo "<script>window.location = 'BloodReceiver.php';</script>";
	}

	function email_send($mail)
	{
		$content="Request For blood has been approved";
		
		$mail_to = $mail;
		$mail_sub = "Approval";
		$mail_content = $content;
		$From_name="No-Reply";
			
		require_once('PHPMailer-master/class.phpmailer.php');
		$mail = new PHPMailer(true);
		$mail->IsSMTP(); // telling the class to use SMTP
		
		try
		{
			$mail->Host       = "smtp.gmail.com";   // SMTP server
			$mail->SMTPAuth   = true;              // enable SMTP authentication
			$mail->SMTPSecure = "ssl";            // sets the prefix to the servier  
			$mail->Port       = 465;             // set the SMTP port for the GMAIL
	  
			$mail->Username   = "plzdonotreplyback@gmail.com";  // GMAIL username
			$mail->Password   = "plzdonotreplyback2423479";    // GMAIL password
			$mail->FromName = "No-Reply";
			$mail->AddReplyTo("plzdonotreplyback@gmail.com","No-Reply");
			$mail->addAddress($mail_to,"User 1");
			$mail->Subject = $mail_sub;
			$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; 
			$mail->Body = $mail_content;
			if($mail->Send())
			{
				
			}
			else
			{
				
			}
		}
		catch (phpmailerException $e) 
		{
			echo $e->errorMessage();
		} 
		catch (Exception $e) 
		{
			echo $e->getMessage();
		} 
	}
?>