
<?php  
	session_start();
	require "data.php";

	if($_SERVER['REQUEST_METHOD'] == "POST"){;
	
		$profiledata1 = "UPDATE vehicle_list SET pos_lat = NULL, pos_long = NULL;";
		$acquire1 = $datasql->query($profiledata1);	

	}


	// $profiledata = "SELECT * from vehicle_list";
	// $acquire = $datasql->query($profiledata);

	// $rows = $acquire->num_rows; 

	// for ($x = 0; $x< $rows; $x++) {
	//  	if (!$rows == 0) {
	 		
	//  	}
	//  }
	
?>	