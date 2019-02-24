<?php
	require "session.php";
	error_reporting(0);
?>
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
	<title>Edit Profile</title>
</head>
<body class="main-body">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<?php  
	session_start();
	require "profilelist.php";
	error_reporting(0);
?>	
	
	<table class='table text-center' align='center' style='background-color: #edebe9; border-bottom: 5px solid grey;border-right: 5px solid grey;'><tr style='font-weight: bolder;'><td></td><td>Vehicle ID</td><td>Vehicle Type</td><td>Plate No.</td><td>Passenger Count</td><td>Passenger Capacity</td></tr></td>
	
<?php
	for ($x = 0; $x< $rows; $x++) {
	 	if (!$rows == 0) {
	 		$getdata = $acquire->fetch_assoc();
	 		$depdata = $dep->fetch_assoc();
	 		$select = $getdata['vehicle_info'];

?>
<tr>
	<td width="10%"><button name="sel" type="submit" value="<?php echo $select?>" style="border: none; background-color: green; color: white; box-shadow: 5px 3px 5px grey;">Edit</button></td>
	<td><?php echo $getdata['vehicle_info']; ?></td>
	<td><?php echo $depdata['vehicle_name']; ?></td>
	<td><?php echo $getdata['vehicle_plate']; ?></td>
	<td><?php echo $getdata['passenger_curr']; ?></td>
	<td><?php echo $getdata['passenger_max']; ?></td>
	</tr>

<?php

	if($_SERVER['REQUEST_METHOD'] == "POST") {		
				$_SESSION['idsel'] = $_POST['sel'];
				header('location: edit.php');
		 	}  
		}
	}
	mysqli_close($datasql);
?>

</table>
 </form>
</body>
</html>