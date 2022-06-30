<?php
	require_once 'connect.php';
	$q_item = $conn->query("SELECT * FROM `item` WHERE `item_id` = '$_REQUEST[item_id]'") or die(mysqli_error());
	$f_item = $q_item->fetch_array();
?>
<div class = "col-lg-3"></div>
<div class = "col-lg-6">
	<form method = "POST" action = "edit_book_query.php?item_id=<?php echo $f_item['item_id']?>" enctype = "multipart/form-data">
		<div class = "form-group">
			<label>Laboratory Department:</label>
			<select name="department" id="" class="form-control">
				<?php
					$dept = $f_item['department'];
					if($dept == 'hs'){
	
						echo "<option value='hs' selected >High School Science Laboratory</option>
						<option value='main'>Main Science Laboratory</option>";
					
					}else{
						
						echo "<option value='hs' >High School Science Laboratory</option>
						<option value='main' selected >Main Science Laboratory</option>";
						
					}
				?>
			</select>
		</div>
		<div class = "form-group">
			<label>Item Name:</label>
			<input type = "text" value = "<?php echo $f_item['item_name']?>" name = "item_name" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Category:</label>
			<select name="item_category" id="" class="form-control">
			<?php
				$qx_item = $conn->query("SELECT * FROM `category`") or die(mysqli_error());
        		while($fs_item = $qx_item->fetch_array()){
				if($fs_item['category_name'] == $f_item['item_category']){
				?>
				<option selected value="<?php echo $fs_item['category_name']?>"><?php echo $fs_item['category_name']?></option>
				<?php
				}else{
				?>
				<option value="<?php echo $fs_item['category_name']?>"><?php echo $fs_item['category_name']?></option>
				<?php
				}
				}
			?>
			</select>
		</div>
		<div class = "form-group">
			<label>Descriptions:</label>
			<input type = "text" name = "item_description" value = "<?php echo $f_item['item_description']?>" class = "form-control" required = "required"/>
		</div>
		<div class = "form-group">
			<label>Condition:</label>
			<input type = "text" name = "item_condition" value = "<?php echo $f_item['item_condition']?>" class = "form-control" required = "required" />
		</div>
		<div class = "form-group">
			<label>Remarks:</label>
			<input type = "text" name = "item_remark" value = "<?php echo $f_item['item_remark']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Quantity:</label>
			<input type = "number"  value = "<?php echo $f_item['item_quantity']?>" name = "item_quantity" required = "required" class = "form-control" />
			<select name="item_type" id="" class="form-control" required>
				<?php
				if( $f_item['item_type'] == 'pcs' ){
					echo "<option selected value='pcs'>pcs</option>";
					echo "<option value='set'>set</option>";
					echo "<option value='box'>box</option>";
					echo "<option value='bottle'>bottle</option>";
				}elseif($f_item['item_type'] == 'set'){
					echo "<option value='pcs'>pcs</option>";
					echo "<option selected value='set'>set</option>";
					echo "<option value='box'>box</option>";
					echo "<option value='bottle'>bottle</option>";
				}elseif($f_item['item_type'] == 'box'){
					echo "<option value='pcs'>pcs</option>";
					echo "<option value='set'>set</option>";
					echo "<option selected value='box'>box</option>";
					echo "<option value='bottle'>bottle</option>";
				}elseif($f_item['item_type'] == 'bottle'){
					echo "<option value='pcs'>pcs</option>";
					echo "<option value='set'>set</option>";
					echo "<option value='box'>box</option>";
					echo "<option selected value='bottle'>bottle</option>";
				}
				?>
			</select>
		</div>
		<div class = "form-group">
			<button name = "edit_book" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
		</div>
	</form>		
</div>