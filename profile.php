<!DOCTYPE html>
<html>
<meta lang="en-US">
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
	<link href="./css/bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
<head>
	<title>Add Profile</title>
</head>
<body class="main-body">


<?php  
	session_start();
	require "data.php";

	$profiledata = "SELECT * from vehicle_list";
	$acquire = $datasql->query($profiledata);
 	
 	$vecdep = "SELECT vehicle_name from vehicle_type INNER JOIN vehicle_list ON vehicle_list.vehicle_id = vehicle_type.vehicle_id ORDER BY vehicle_info;";
	$dep = $datasql->query($vecdep);
	$rows = $acquire->num_rows; 
	
	echo "<table class='table text-center' align='center' style='background-color: #edebe9; border-bottom: 5px solid grey;border-right: 5px solid grey;'><tr style='font-weight: bolder'><td>Vehicle ID</td><td>Vehicle Type</td><td>Plate No.</td><td>Passenger Count</td><td>Passenger Capacity</td></tr>";
	
	for ($x = 0; $x< $rows; $x++) {
	 	if (!$rows == 0) {
	 		$getdata = $acquire->fetch_assoc();
	 		$depdata = $dep->fetch_assoc();
	 		
	 		echo "<tr>";
	 		echo "<td>", $getdata['vehicle_info'], "</td>";
	 		echo "<td>", $depdata['vehicle_name'], "</td>";
	 		echo "<td>", $getdata['vehicle_plate'], "</td>";
	 		echo "<td>", $getdata['passenger_curr'], "</td>";
	 		echo "<td>", $getdata['passenger_max'], "</td>";
	 		echo "</tr>";
	 	}
	 }
	 echo "</table>";
	 mysqli_close($datasql);
?>
</body>
</html>