<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_book'])){
		$category = $_POST['category'];
		$conn->query("UPDATE `category` SET `category_name` = '$category' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
		
		$q_admin = $conn->query("SELECT * FROM `admin`") or die(mysqli_error());
		while($f_admin = $q_admin->fetch_array()){
			$curr_user = $f_admin['username'];
		}
		$action = "EDITED";
		date_default_timezone_set('Asia/Manila');
		$date = date ('d-m-y h:i:sa'); 
		$conn->query("INSERT INTO `logs` VALUES('', '$date', '$curr_user', '$category', '$action')") or die(mysqli_error());
		
		echo '
			<script type = "text/javascript">
				alert("Save Changes");
				window.location = "items.php";
			</script>
		';
	}