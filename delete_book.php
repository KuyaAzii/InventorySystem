<?php
	require_once 'connect.php';

	$getItem_name = $conn->query("SELECT * FROM `item` WHERE `item_id` = '$_REQUEST[item_id]'") or die(mysqli_error());
	while($g_item = $getItem_name->fetch_array()){
		$curr_item = $g_item['item_name'];
	}

	$conn->query("DELETE FROM `item` WHERE `item_id` = '$_REQUEST[item_id]'") or die(mysqli_error());

	$q_admin = $conn->query("SELECT * FROM `admin`") or die(mysqli_error());
		while($f_admin = $q_admin->fetch_array()){
			$curr_user = $f_admin['username'];
		}
		$action = "DELETED";
		date_default_timezone_set('Asia/Manila');
		$date = date ('d-m-y h:i:sa'); 
		$conn->query("INSERT INTO `logs` VALUES('', '$date', '$curr_user', '$curr_item', '$action')") or die(mysqli_error());
		
	header("location: items.php");