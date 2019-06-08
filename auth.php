<?php
	//Start session
	session_start();
	//Check whether the session variable SESS__ID is present or not
	if(!isset($_SESSION['SESS__ID']) || (trim($_SESSION['SESS__ID']) == '')) {
		header("location: ind.php");
		exit();
	}
?>