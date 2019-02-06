<?php  
	session_start();
	if($_SESSION['userlogin'] == 'authok'){

	}else {
		header("location: auth.php");
    	die();
    }
?>