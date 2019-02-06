<?php 
	require "login.php";
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>

	<title>Admin Login</title>
	<meta lang="en-US">
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
	<link rel="stylesheet" type="text/css" href="./css/animate/animate.css">
	<link href="./css/bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="./css/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">
	<link href="./css/style.css" type="text/css" rel="stylesheet">

	<style type="text/css">
		body {
			background-color: #191606;
		}

		.instyle {
			margin: 10px;
		}

		.form-container {
			background-color: #191606;
			width: 400px;
		}

		input {
			padding:5px; 
			border-radius: 5px; 
			width: 250px;
			margin-bottom:20px;
		}

		button.auth {
			background-color: #B4710A;
			border:none;
			width: 250px;
			text-align: center;
		}

	</style> 

</head>

<body class="animated fadeIn">

	<div class="centering">
		<div class="container text-center" style="display: block;"><img src="./images/logo.png" width="350vw"></div>

	<div>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		<div class="container text-center form-container">
			<div class="form-group instyle"> 
			<div><input class="text-center" type="text" name="username" placeholder="Username" autocomplete="off" required id="username"></div>
			<div><input type="password" name="password" placeholder="Password" class="text-center" autocomplete="off" required></div>
			<button class="btn btn-primary cust-btn auth" type="submit">Login</button>
			</div>		
		</div>
	</form>
	</div>
	<?php 
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			require "login_method.php";
		}

	 ?>
</body>
</html>