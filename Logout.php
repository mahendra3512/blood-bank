<?php
//Start session
	session_start();
//Unset the variables stored in session
	unset($_SESSION['SESS']);

	header('Location:index.php');
?>