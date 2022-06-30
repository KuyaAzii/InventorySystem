<?php
	require_once 'connect.php';

    $password = $_POST['current_password'];
    $qadmin = $conn->query("SELECT * FROM `admin` WHERE `username` = 'admin'") or die(mysqli_error());
		while($f_admin = $qadmin->fetch_array()){
			$curr_pass = $f_admin['password'];
		}

    if($password == $curr_pass){
        if($conn->query("TRUNCATE TABLE item") or die(mysqli_error())){
            $conn->query("TRUNCATE TABLE logs") or die(mysqli_error());
            $conn->query("TRUNCATE TABLE category") or die(mysqli_error()); 
            header("location: home.php");
        }
    }else{
        echo '
				<script type = "text/javascript">
					alert("Password Does not match Current Password!");
					window.location = "home.php";
				</script>
			';
    }