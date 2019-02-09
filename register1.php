
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
<head>
	<title>Add Profile</title>
	<style type="text/css">
		.trying {
			border: 2px solid red;
			padding: 10px;
		}
	</style>
</head>
<body class="main-body animated fadeIn">


	<div class="container-fluid dashheading">
		<div class="container">
			<p>Add Profile</p>
		</div>
	</div>

	<div class="container" style="background-color: #edebe9; width:70%;box-shadow: 5px 5px 20px grey; margin-top: 20px;padding: 50px;">

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		<div>
			<label name="vehicle-type"><h4>Select Vehicle Type</h4></label><br>
			<select name="vehicle-type" class="form-control" style="font-size: 15px;" required>
				<option value="" disabled selected>Vehicle Type</option>
				<option value="1">Bus</option>
				<option value="2">Jeep</option>
				<option value="3">UV</option>
				<option value="4">Taxi</option>
			</select>			
		</div>
		<div style="margin-top: 50px">
			<label name="vehicle-type"><h4>Plate Number</h4></label><br>
			<input type="text" name="plate" class="form-control" size="6" maxlength="6" autocomplete="off" required>	
		</div>
		<div style="margin-top: 50px">
			<label name="vehicle-type"><h4>Max Passenger Capacity</h4></label><br>
			<input type="text" onkeyup="this.value=this.value.replace(/[^\d]/,'')" name="capacity" class="form-control" size="3" maxlength="3" autocomplete="off" required>	 
			<div class="container-fluid">
				<button type="submit" class="btn btn-primary form-control";">Register</button>
			</div>
		</div>
		</form>
	</div>
	<?php   	
	session_start();
	error_reporting(0);
	require "data.php";
		
		$vehicle_type = $_POST['vehicle-type'];
		$plate = $_POST['plate'];
		$capacity = $_POST['capacity'];
		$profile = "SELECT * FROM vehicle_list";
		$acquire = $datasql->query($profile);

		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if($acquire->num_rows == 0) {
				$addprofile = "INSERT INTO vehicle_list ( vehicle_id,vehicle_plate,passenger_max) VALUES ('$vehicle_type','$plate','$capacity')";
				$indb = $datasql->query($addprofile);
						echo "<script>
									alert('Sucess: New Vehicle Profile Added');
									window.location = 'manage.php';
							  </script>";				
				}
			}
?>

</body>
</html>