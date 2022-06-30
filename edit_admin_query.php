<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_admin'])){	
		$old_password = $_POST['old_password'];
		$new_password = $_POST['new_password'];
		$re_password = $_POST['re_password'];
		
		$qadmin = $conn->query("SELECT * FROM `admin` WHERE `username` = 'admin'") or die(mysqli_error());
		while($f_admin = $qadmin->fetch_array()){
			$curr_pass = $f_admin['password'];
		}

		if($curr_pass == $old_password){
			$conn->query("UPDATE `admin` SET `password` = '$new_password' WHERE `username` = 'admin'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Save Changes");
					window.location = "logout.php";
				</script>
			';
		}else{
			echo '
				<script type = "text/javascript">
					alert("Old Password Does not match Current Password!");
					window.location = "home.php";
				</script>
			';
		}
		
	}	