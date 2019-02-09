<?php   	
	session_start();
	error_reporting(0);
	require "data.php";


		$vehicle_type = $_POST['vehicle-type'];
		$plate = $_POST['plate'];
		$capacity = $_POST['capacity'];
		$profile = "SELECT * FROM vehicle_list ORDER BY vehicle_info ASC";
		$addprofile = "INSERT INTO vehicle_list (vehicle_id, vehicle_plate , passenger_max) VALUES ($vehicle_type','$plate','$capacity')";
		$acquire = $datasql->query($profile);
		$rows = $acquire->num_rows;


		if ($rows == 0) {
			header('location: register1.php');
			exit;
		} else {
			header('location: register2.php');
		}
?>
