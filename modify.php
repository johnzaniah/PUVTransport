<?php 
	$host = 'mysql.freehostia.com';
	$user = 'josalv94_transad';
	$pass = 'joshua567482';
	$db = 'josalv94_transad';

	$datasql = new mysqli($host,$user,$pass,$db) or die ($datasql->connect_error);

	$get = $_SESSION['idsel'];

 	$vecdep = "SELECT * from vehicle_list WHERE vehicle_info = '$get'";
	$dep = $datasql->query($vecdep);
	$rows = $dep->num_rows; 

?>