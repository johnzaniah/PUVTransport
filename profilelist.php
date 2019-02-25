<?php
	$host = 'mysql.freehostia.com';
	$user = 'josalv94_transad';
	$pass = 'joshua567482';
	$db = 'josalv94_transad';
	$port = '3307';


	$datasql = new mysqli($host,$user,$pass,$db) or die ($datasql->connect_error);

	$profiledata = "SELECT * from vehicle_list";
	$acquire = $datasql->query($profiledata);
 	
 	$vecdep = "SELECT vehicle_name from vehicle_type INNER JOIN vehicle_list ON vehicle_list.vehicle_id = vehicle_type.vehicle_id ORDER BY vehicle_info;";
	$dep = $datasql->query($vecdep);
	$rows = $acquire->num_rows; 
?>