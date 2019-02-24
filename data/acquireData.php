<?php
	$host = 'localhost';
	$user = 'root';
	$pass = 'joshua567482';
	$db = 'transad_profile';

	$datasql = new mysqli($host,$user,$pass,$db) or die ($datasql->connect_error);

	$profiledata = "SELECT * from vehicle_list";
	$acquire = $datasql->query($profiledata);
 	
 	$vecdep = "SELECT vehicle_name from vehicle_type INNER JOIN vehicle_list ON vehicle_list.vehicle_id = vehicle_type.vehicle_id ORDER BY vehicle_info;";
	$dep = $datasql->query($vecdep);
	$rows = $acquire->num_rows; 
?>