<?php
	require "session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>TargetAdmin</title>
	<meta lang="en-US">
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
	<link rel="stylesheet" href="./css/animate/animate.css">
	<link href="./css/bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="./css/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body class="main-body">

			<nav class="navbar navbar-inverse nav-set dashnav">
			  <div class="container">
			    <div class="navbar-header">
			    <div class="img-responsive nav-moblogo"><img src="./images/logomob.png" style=""></div>
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#appnav">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			    </div>
			    <div class="collapse navbar-collapse nav-items" id="appnav">
			      <ul class="nav navbar-nav">
						<li><a href="javascript::void(0)" class="selected dash">Statistics</a></li>
						<li><a href="Manage.php" class="dash">Manage</a></li>
						<li><a href="Settings.php" class="dash">Settings</a></li>
						<li><a href="logout.php" class="dash" onclick="log();">Logout</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>

	<div class="row dashside">
		<div class="col-md-4">
			<ul class="sidebar">
				<li><div class="container-fluid logo-dash"><img src="./images/logo.png" class="img-responsive"></div></li>
				<li><a href="javascript::void(0)" class="selected dash">Statistics</a></li>
				<li><a href="Manage.php" class="dash">Manage</a></li>
				<li><a href="Settings.php" class="dash">Settings</a></li>
				<li><a href='logout.php' class='dash' onclick="log();">Logout</a></li>
						
			</ul>
		</div>
	</div>

		<div class="container-fluid dashheading">
			<div class="container content-margin">
				<p>Statistics</p>
			</div>
		</div>
		
</body>

<script type="text/javascript" src="./js/logout.js"></script>
</html>