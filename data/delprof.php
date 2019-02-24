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
	<title>Delete Profile</title>
</head>
<body class="main-body">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<?php  
	session_start();
	require "profilelist.php";
	error_reporting(0);
?>	
	
	<table class='table text-center' align='center' style='background-color: #edebe9; border-bottom: 5px solid grey;border-right: 5px solid grey;'><tr style='font-weight: bolder;'><td><button type='submit' class='btn btn-primary' style='border-radius: 0px; border: none;font-size: 10px;background-color: #B4710A;'>Delete</button></td><td>Vehicle ID</td><td>Vehicle Type</td><td>Plate No.</td><td>Passenger Count</td><td>Passenger Capacity</td></tr></td>
	
<?php
	for ($x = 0; $x< $rows; $x++) {
	 	if (!$rows == 0) {
	 		$getdata = $acquire->fetch_assoc();
	 		$depdata = $dep->fetch_assoc();
	 		$select = $getdata['vehicle_info'];

?>
<tr>
	<td width="10%"><input type="checkbox" name="wtf[]" value="<?php echo $select; ?>" style="width:50px"></td>
	<td><?php echo $getdata['vehicle_info']; ?></td>
	<td><?php echo $depdata['vehicle_name']; ?></td>
	<td><?php echo $getdata['vehicle_plate']; ?></td>
	<td><?php echo $getdata['passenger_curr']; ?></td>
	<td><?php echo $getdata['passenger_max']; ?></td>
	</tr>

<?php
	 if($_SERVER['REQUEST_METHOD'] == "POST") {
				$check= $_POST['wtf'];
	 			$wwww = implode(",",$check);
				$delaction = "DELETE FROM vehicle_list WHERE vehicle_list.vehicle_info IN ($wwww)";
			 	$deluser = $datasql->query($delaction);
			 	header('location: delprof.php');
			}  
		}
	}
	mysqli_close($datasql);
?>

</table>
 </form>
</body>
</html>