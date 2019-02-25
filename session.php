 <?php
 	session_start();
 	error_reporting(0);

	if(!$_SESSION['userlogin'] == 'authok'){
			header("location: auth.php");
	    	die();
	} else {
		$idletime=240;

		if($_SESSION['timestamp'] == NULL) {
			$_SESSION['timestamp'] = time();
		} else {
			if(time()-$_SESSION['timestamp']>$idletime){
				session_unset();
				session_destroy();
			} else {
				$_SESSION['timestamp'] = time();
			}
		}
	}
 ?>