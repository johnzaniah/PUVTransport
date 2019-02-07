
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
	<nav class="navbar navbar-inverse nav-set">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.html" class="nav-moblogo transnav home">
				<picture>
					<source media="(max-width: 768px)" srcset="./images/logomob.png">
					<img src="./images/TransAd.png">
				</picture>
				</a>
				<ul class="nav navbar-nav">
					<li><a href="#"><span id="date" class="timenav"></span></a></li>
				</ul>	
			</div>
		</div>
	</nav>

	<div class="container-fluid dashheading">
		<div class="container">
			<p>Add Profile</p>
		</div>
	</div>

	<div class="container" style="background-color: #edebe9; width:70%;box-shadow: 5px 5px 20px grey; margin-top: 20px;padding: 50px;">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		<div>
			<label name="vehicle-type"><h4>Select Vehicle Type</h4></label><br>
			<select name="vehicle-type" class="form-control" style="font-size: 15px;">
				<option value="" disabled selected>Vehicle Type</option>
				<option value="1">Bus</option>
				<option value="2">Jeep</option>
				<option value="3">UV</option>
				<option value="4">Taxi</option>
			</select>			
		</div>


		<div style="margin-top: 50px">
			<label name="vehicle-type"><h4>Plate Number</h4></label><br>
			<input type="text" name="plate" class="form-control" size="6" maxlength="6">	
		</div>
		<div style="margin-top: 50px">
			<label name="vehicle-type"><h4>Max Passenger Capacity</h4></label><br>
			<input type="text" onkeyup="this.value=this.value.replace(/[^\d]/,'')" name="plate" class="form-control" size="3" maxlength="3">	
		</div>

		</form>
	</div>


</body>
</html>