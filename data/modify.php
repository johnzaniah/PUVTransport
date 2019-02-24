<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = 'joshua567482';
	$db = 'transad_profile';

	$datasql = new mysqli($host,$user,$pass,$db) or die ($datasql->connect_error);

	$get = $_SESSION['idsel'];

 	$vecdep = "SELECT * from vehicle_list WHERE vehicle_info = '$get'";
	$dep = $datasql->query($vecdep);
	$rows = $dep->num_rows; 

?>