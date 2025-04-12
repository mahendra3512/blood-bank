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

<h3>Why Donate?</h3>
	<h4>I am a Red Cross blood donor that won't give up.  I tried to give blood when I was 18, but was declined in both my junior and senior high school years. Once I got to college, I was deferred again. I was finally able to give blood and have given twice. I love donating blood. The thought of being able to help save three people’s lives every time I go makes me feel like a better person.</h4>

</body>
</html>