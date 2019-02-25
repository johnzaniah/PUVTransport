<?php  	
	session_start();
	error_reporting(0);
	require "data.php";
		$vehicle_type = $_POST['vehicle-type'];
		$plate = $_POST['plate'];
		$capacity = $_POST['capacity'];
		$profile = "SELECT * FROM vehicle_list ORDER BY vehicle_info ASC";
		$addprofile = "INSERT INTO vehicle_list (vehicle_id, vehicle_plate , passenger_max) VALUES ('$vehicle_type','$plate','$capacity')";
		$acquire = $datasql->query($profile);
		$rows = $acquire->num_rows;


		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if($rows == 0) {
				$indb = $datasql->query($addprofile);
				echo "<script>alert('Sucess: New Vehicle Profile Added')</script>";
				unset($_POST);
				header('location: manage.php');
				exit();
			} else {

				for($x = 0; $x<$rows;$x++) {
						$fetch = $acquire->fetch_assoc();
						$dbplate = $fetch['vehicle_plate'];

					if ($plate == $dbplate ) {
						echo "<div class='trying'> AAAAAAAAAAA </div>";
					} else {
						$indb = $datasql->query($addprofile);
						echo "<script>alert('Sucess: New Vehicle Profile Added')</script>";
						unset($_POST);
						break;
						header('location: manage.php');
						exit();

					}
				}
			}
		}
		
?>


