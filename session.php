<?php  
	session_start();
	if(!$_SESSION['userlogin'] == 'authok'){
		header("location: auth.php");
    	die();
    }
?>