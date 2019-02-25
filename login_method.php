<?php  
		$username = $sql->escape_string($_POST['username']);	
		$log = "SELECT * from user_accounts WHERE account_name ='$username'";
		$result = $sql->query($log);		
			if($result->num_rows == 0){
			} else {
				$auth = $result->fetch_assoc();

				if ($_POST['password'] == $auth['password']) {
					$_SESSION['userlogin'] = "authok";
					header("location: dashboard.php");
				} else {
				echo "<script>alert('Wrong Password!')</script>";
			} 
		}
			mysqli_close($sql);
	?>