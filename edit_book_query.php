<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_book'])){
		$item_name = $_POST['item_name'];
		$item_type = $_POST['item_type'];
		$item_category = $_POST['item_category'];
		$item_description = $_POST['item_description'];
		$item_condition = $_POST['item_condition'];
		$item_remark = $_POST['item_remark'];
		$item_quantity = $_POST['item_quantity'];
		$conn->query("UPDATE `item` SET `item_name` = '$item_name', `item_category` = '$item_category', `item_description` = '$item_description', `item_condition` = '$item_condition', `item_remark` = '$item_remark', `item_quantity` = '$item_quantity', `item_type` = '$item_type' WHERE `item_id` = '$_REQUEST[item_id]'") or die(mysqli_error());
		
		$q_admin = $conn->query("SELECT * FROM `admin`") or die(mysqli_error());
		while($f_admin = $q_admin->fetch_array()){
			$curr_user = $f_admin['username'];
		}
		$action = "EDITED";
		date_default_timezone_set('Asia/Manila');
		$date = date ('d-m-y h:i:sa'); 
		$conn->query("INSERT INTO `logs` VALUES('', '$date', '$curr_user', '$item_name', '$action')") or die(mysqli_error());
		
		echo '
			<script type = "text/javascript">
				alert("Save Changes");
				window.location = "items.php";
			</script>
		';
	}