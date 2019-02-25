<?php
	require "session.php";
	require "token.php";
	error_reporting(0);
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
	<link rel="icon" href="./images/webicon-admin.png">
	<link rel="stylesheet" href="./css/animate/animate.css">
	<link href="./css/bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="./css/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body class="main-body" onload="">

			<nav class="navbar navbar-inverse nav-set2 dashnav">
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
						<li><a href="dashboard.php" class="dash">Statistics</a></li>
						<li><a href="javascript::void(0)" class="selected dash">Manage</a></li>
<!-- 						<li><a href="Settings.php" class="dash">Settings</a></li> -->
						<li><a href="logout.php" class="dash" onclick="log();">Logout</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>

	<div class="row dashside">
		<div class="col-md-4">
			<ul class="sidebar">
				<li><div class="container-fluid logo-dash"><img src="./images/logo.png" class="img-responsive"></div></li>
				<li><a href="dashboard.php" class="dash">Statistics</a></li>
				<li><a href="javascript::void(0)" class="selected dash">Manage</a></li>
<!-- 				<li><a href="Settings.php" class="dash">Settings</a></li> -->
				<li><a href='logout.php' class='dash' onclick="log();">Logout</a></li>
						
			</ul>
		</div>
	</div>

		<div class="container-fluid dashheading">
			<div class="container content-margin">
				<p>Profiles</p>
			</div>
		</div>
		<div class="container content-margin animated fadeIn" style="">	
				<div class="text-center frameprop" style="width:90%">
					<div style="padding: 10px 0 10px; float: left">
						<a href="register.php" class="btn btn-primary" style="background-color: navy; border-radius: 0px; border: 0;box-shadow: 5px 3px 5px grey;">Register</a>
						<button onclick="win3();" type="button" id="editbtn" class="btn btn-primary" style="background-color: green; border-radius: 0px; border: 0;box-shadow: 5px 3px 5px grey;">Edit</button>
						<button onclick="win2();" type="button" id="delbtn" class="btn btn-primary" style="background-color: #B4710A; border-radius: 0px; border: 0;box-shadow: 5px 3px 5px grey;">Delete</button>

					</div>
					<span style="padding: 10px; float: right"><button onclick='win1();' id="x" type='button' class='btn btn-primary animated fadeIn' style="background-color: darkred; border-radius: 0px; border: 0; box-shadow: 5px 3px 5px grey;">X</button></span>
					<iframe src="profile.php" frameborder="2px" width="100%" height="90%" id="one" class="animated fadeIn"></iframe>
					<iframe src="delprof.php" frameborder="2px" width="100%" height="90%" id="two" class="animated fadeIn"></iframe>
					<iframe src="mod.php" frameborder="2px" width="100%" height="90%" id="three" class="animated fadeIn"></iframe>
				</div>	
			</div>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="form11">
				<?php
					include "trigger.php";  
				?>	
			</form>
</body>

<script type="text/javascript" src="./js/logout.js"></script>
<script type="text/javascript" src="./js/items.js"></script>
<script type="text/javascript">
	
</script>
</html>