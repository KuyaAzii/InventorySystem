<?php
	require_once 'connect.php';
	$q_item = $conn->query("SELECT * FROM `category` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
	$f_item = $q_item->fetch_array();
?>
<div class = "col-lg-3"></div>
<div class = "col-lg-6">
	<form method = "POST" action = "edit_category_query.php?id=<?php echo $f_item['id']?>" enctype = "multipart/form-data">
		
		<div class = "form-group">
			<label>Category Name:</label>
			<input type = "text" value = "<?php echo $f_item['category_name']?>" name = "category" class = "form-control" />
		</div>
		
		<div class = "form-group">
			<button name = "edit_book" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
		</div>
	</form>		
</div>