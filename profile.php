
<!DOCTYPE html>
<html>

<meta lang="en-US">
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
	<link rel="stylesheet" href="./css/animate/animate.css">
	<link href="./css/bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="./css/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

	
	echo "<table class='table table-responsive table-bordered' align='center'>";
	echo "<tr class='text-center'><th align ='center'>Vehicle ID</th><th>Vehicle Type</th><th>Plate No.</th><th>Passenger Count</th><th>Passenger Capacity</th></tr>";
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

	 	// mysqli_close($datasql);		

?>

</body>
</html>