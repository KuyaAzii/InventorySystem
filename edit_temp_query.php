<?php
	require_once 'connect.php';
	if(ISSET($_POST['save_temp'])){	
		$prepared = $_POST['prepared'];
		$prepared_position = $_POST['prepared_position'];
		$inspected = $_POST['inspected'];
        $inspected_position = $_POST['inspected_position'];
		

		$conn->query("UPDATE `template` SET `prepared_by` = '$prepared', `prepared_by_label` = '$prepared_position', `inspected` = '$inspected', `inspected_by_label` = '$inspected_position'  WHERE `temp_id` = '1' ") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Save Changes");
					window.location = "template.php";
				</script>
			';
	
		
	}	