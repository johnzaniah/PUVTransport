<?php  
	session_start();
	$_SESSION['userlogin'] = array();
	echo $_SESSION['userlogin'];
	session_destroy();
	header("location: index.html");
	$_SESSION['userlogin'];
?>