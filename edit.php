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
<body class="main-body animated fadeIn" style="width:100%; height: 100% ;background-color: white">
<div class="container text-center" style="margin-top: 50px">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<?php  
	session_start();
	require "modify.php";
	require "token.php";
	error_reporting(0);

	 	if (!$rows == 0) {
	 		$depdata = $dep->fetch_assoc();

?>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		<div>
			<label name="vehicle-type"><h4>Select Vehicle Type</h4></label><br>
			<select name="vehicle-type" class="form-control" style="font-size: 15px;" required >
				<option value="" disabled selected>Vehicle Type</option>
				<option value="1">Bus</option>
				<option value="2">Jeep</option>
				<option value="3">UV</option>
				<option value="4">Taxi</option>
			</select>			
		</div>
		<div style="margin-top: 50px">
			<label name="vehicle-type"><h4>Plate Number</h4></label><br>
			<input type="text" name="plate" class="form-control" size="6" maxlength="6" autocomplete="off" required placeholder="<?php echo $depdata['vehicle_plate']?>">	
		</div>
		<div style="margin-top: 50px">
			<label name="vehicle-type"><h4>Max Passenger Capacity</h4></label><br>
			<input type="text" onkeyup="this.value=this.value.replace(/[^\d]/,'')" name="capacity" class="form-control" size="3" maxlength="3" autocomplete="off" required placeholder="<?php echo $depdata['passenger_max']?>">	 
			<div class="container-fluid">
				<button type="submit" class="btn btn-primary form-control";">Save</button>
			</div>
		</div>
		</form>
<?php
	 if($_SERVER['REQUEST_METHOD'] == "POST") {
				$type = $_POST['vehicle-type'];
				$plate = $_POST['plate'];
				$cap = $_POST['capacity'];
				$saveaction = "UPDATE vehicle_list SET vehicle_id = $type, vehicle_plate = '$plate', passenger_max = '$cap' WHERE vehicle_info = '$get'";
			 	$save = $datasql->query($saveaction);
			 	header('location: mod.php');
			}  
		}
	mysqli_close($datasql);
?>

		</table>
	</form>
</div>
</body>
</html>