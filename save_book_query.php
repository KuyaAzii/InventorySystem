<?php
	require_once 'connect.php';
	if(ISSET($_POST['save_book'])){
		$department = $_POST['department'];
		$item_name = $_POST['item_name'];
		$item_type = $_POST['item_type'];
		$item_category = $_POST['item_category'];
		$item_description = $_POST['item_description'];
		$item_condition = $_POST['item_condition'];
		$item_remark = $_POST['item_remark'];
		$item_quantity = $_POST['item_quantity'];
		echo $department;
		echo $item_name;
		echo $item_type;
		echo $item_category;
		echo $item_description;
		echo $item_remark;
		echo $item_quantity;

		$conn->query("INSERT INTO `item` VALUES('', '$department', '$item_name', '$item_category', '$item_description', '$item_condition', '$item_remark', '$item_quantity', '$item_type')") or die(mysqli_error());
		
		$q_admin = $conn->query("SELECT * FROM `admin`") or die(mysqli_error());
		while($f_admin = $q_admin->fetch_array()){
			$curr_user = $f_admin['username'];
		}
		$action = "ADDED";
		date_default_timezone_set('Asia/Manila');
		$date = date ('d-m-y h:i:sa'); 
		$conn->query("INSERT INTO `logs` VALUES('', '$date', '$curr_user', '$item_name', '$action')") or die(mysqli_error());
		
		echo'
			<script type = "text/javascript">
				alert("Successfully saved data");
				window.location = "items.php";
			</script>
		';
	}