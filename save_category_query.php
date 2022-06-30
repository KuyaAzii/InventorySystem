<?php
	require_once 'connect.php';
	if(ISSET($_POST['save_category'])){
		$department = $_POST['category'];
		$conn->query("INSERT INTO `category` VALUES('', '$department')") or die(mysqli_error());
		
		$q_admin = $conn->query("SELECT * FROM `admin`") or die(mysqli_error());
		while($f_admin = $q_admin->fetch_array()){
			$curr_user = $f_admin['username'];
		}
		$action = "ADDED";
		date_default_timezone_set('Asia/Manila');
		$date = date ('d-m-y h:i:sa'); 
		$conn->query("INSERT INTO `logs` VALUES('', '$date', '$curr_user', '$department', '$action')") or die(mysqli_error());
		
		echo'
			<script type = "text/javascript">
				alert("Successfully saved data");
				window.location = "category.php";
			</script>
		';
	}