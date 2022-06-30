<!DOCTYPE html>
<?php
	require_once 'valid.php';
?>	
<html lang = "eng">
	<head>
	<title>HS Science Laboratory</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
	</head>
	<style>
		.overflow {
		overflow-x: auto;
		overflow-y: auto;
		max-height: 80vh;
		}
	</style>
	<body style = "background-color:#d3d3d3;">
		<nav class = "navbar navbar-default navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/ll.png" width = "50px" height = "50px" />
					<h4 class = "navbar-text navbar-right">Inventory System</h4>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<div class = "col-lg-3 well" style = "margin-top:60px; min-height: 75vh;">
				<div class = "container-fluid">
					<img src = "images/mc_logo.png" width = "50px" height = "50px"/>
					<br />
					<br />
					<label class = "text-muted"><?php require'account.php'; echo $name;?></label>
				</div>
				<hr style = "border:1px dotted #d3d3d3;"/>
				<ul id = "menu" class = "nav menu">
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "home.php"><i class = "glyphicon glyphicon-home"></i> Home</a></li>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "items.php"><i class = "glyphicon glyphicon-th-list"></i> Items</a></li>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "category.php"><i class = "glyphicon glyphicon-th-list"></i> Category</a></li>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "logs.php"><i class = "
glyphicon glyphicon-paperclip"></i> Logs</a>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "about.php"><i class = "
glyphicon glyphicon-pushpin"></i> About</a>
					<li><a  style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "javascript:void(0)"><i class = "glyphicon glyphicon-cog"></i> Settings</a>
						<ul style = "list-style-type:none;">
						<li><a style = "font-size:15px;" href = "change_password.php"><i class = "glyphicon glyphicon-lock"></i> Change Password</a></li>
						<li><a style = "font-size:15px;" href = "template.php"><i class = "glyphicon glyphicon-refresh"></i> Edit Print Temple</a></li>
							<li><a style = "font-size:15px;" href = "reset.php"><i class = "glyphicon glyphicon-refresh"></i> Reset</a></li>
							
							<li><a style = "font-size:15px;" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-9 well" style = "margin-top:60px; min-height: 75vh;">
				<div class = "alert alert-info">Items</div>
				<input type="text" id="filterInput" onkeyup="filterTable()" style="padding:5.8px;"
                         placeholder="Search item name..."
                                title="Search Item Name" style="border:1px solid black;">
					<button id = "add_book" type = "button" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add new</button>
					<select id = "print_id" class="btn btn-success" onchange="openPrint()">
						<option selected>Export Records</option>
						<option value="hs">High School Science Laboratory Reports</option>
						<option value="main">Main Science Laboratory Reports</option>
					</select>
					<button id = "show_book" type = "button" style = "display:none;" class = "btn btn-success"><span class = "glyphicon glyphicon-circle-arrow-left"></span> Back</button>
					
					<br />
					<br />
					<div id = "book_table" class="overflow" style="max-height: 75vh; min-height: 75vh">
						<table id="dataTable" class = "table table-bordered" width="100%">
							<thead class = "alert-success">
								<tr>
									<th>Department</th>
									<th>Name</th>
									<th>Category</th>
									<th>Description</th>
									<th>Condition</th>
									<th>Remark</th>
									<th>Quantity</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$q_item = $conn->query("SELECT * FROM `item`") or die(mysqli_error());
									while($f_item = $q_item->fetch_array()){
										
								?>
								<tr>
									<td><?php echo $f_item['department']?></td>
									<td><?php echo $f_item['item_name']?></td>
									<td><?php echo $f_item['item_category']?></td>
									<td><?php echo $f_item['item_description']?></td>
									<td><?php echo $f_item['item_condition']?></td>
									<td><?php echo $f_item['item_remark']?></td>
									<td><?php echo $f_item['item_quantity']?> <?php echo $f_item['item_type']?></td>
									<td style="width: 180px;"><a class = "btn btn-danger delbook_id" value = "<?php echo $f_item['item_id']?>"><span class = "glyphicon glyphicon-remove"></span> Delete</a> <a value = "<?php echo $f_item['item_id']?>" class = "btn btn-warning ebook_id"><span class = "glyphicon glyphicon-edit"></span> Edit</a></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					<div id = "edit_form"></div>
					<div id = "book_form" style = "display:none;">
						<div class = "col-lg-3"></div>
						<div class = "col-lg-6">
							<form method = "POST" action = "save_book_query.php" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Laboratory Department:</label>
									<select name="department" id="" class="form-control">
										<option value="high school science department">High School Science Laboratory</option>
										<option value="main science laboratory">Main Science Laboratory</option>
									</select>
								</div>
								<div class = "form-group">
									<label>Item Name:</label>
									<input type = "text" name = "item_name" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Category:</label>
									<select name="item_category" id="" class="form-control">
									<?php
									$qx_item = $conn->query("SELECT * FROM `category`") or die(mysqli_error());
        							while($fs_item = $qx_item->fetch_array()){
									?>	
										<option value="<?php echo $fs_item['category_name']?>"><?php echo $fs_item['category_name']?></option>
									
									<?php
									}
									?>
									</select>
								</div>
								<div class = "form-group">
									<label>Item Description:</label>
									<input type = "text" name = "item_description" class = "form-control" required = "required"/>
								</div>
								<div class = "form-group">
									<label>Condition:</label>
									<input type = "text" name = "item_condition" class = "form-control" required = "required" />
								</div>
								<div class = "form-group">
									<label>Remarks:</label>
									<input type = "text" name = "item_remark" class = "form-control" required = "required" />
								</div>
								<div class = "form-group" >
									<label>Quantity:</label>
									<input type = "number" name = "item_quantity" required = "required" class = "form-control" />
									<select name="item_type" id="" class="form-control" required>
										<option value="pcs">pcs</option>
										<option value="set">set</option>
										<option value="box">box</option>
										<option value="bottle">bottle</option>
									</select>
								</div>
								<div class = "form-group">
									<button name = "save_book" class = "btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Submit</button>
								</div>
							</form>		
						</div>	
					</div>
			</div>
		</div>
		<br />
		<br />
		<br />
		<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
				<label class = "navbar-text pull-right"> Team Vo-Vo Tech & Team Top &copy; All rights reserved Mabini Colleges 2021</label>
			</div>
		</nav>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<script src = "js/sidebar.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script>
	function filterTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("filterInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#add_book').click(function(){
				$(this).hide();
				$('#show_book').show();
				$('#print_id').hide();
				$('#filterInput').hide();
				$('#book_table').slideUp();
				$('#book_form').slideDown();
				$('#show_book').click(function(){
					$(this).hide();
					$('#add_book').show();
					$('#filterInput').show();
					$('#print_id').show();
					$('#book_table').slideDown();
					$('#book_form').slideUp();
				});
			});
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$result = $('<center><label>Deleting...</label></center>');
			$('.delbook_id').click(function(){
				$item_id = $(this).attr('value');
				$(this).parents('td').empty().append($result);
				$('.delbook_id').attr('disabled', 'disabled');
				$('.ebook_id').attr('disabled', 'disabled');
				setTimeout(function(){
					window.location = 'delete_book.php?item_id=' + $item_id;
				}, 1000);
			});
			$('.ebook_id').click(function(){
				$item_id = $(this).attr('value');
				$('#show_book').show();
				$('#print_id').hide();
				$('#filterInput').hide();
				$('#show_book').click(function(){
					$(this).hide();
					$('#print_id').show();
					$('#add_book').show();
					$('#filterInput').show();
					$('#edit_form').empty();
					$('#book_table').show();
					$('#book_admin').show();
				});
				$('#book_table').fadeOut();
				$('#add_book').hide();
				$('#edit_form').load('load_book.php?item_id=' + $item_id);
			});
		});
	function openPrint(){
		var dept = document.getElementById("print_id").value;
		if(dept == 'hs'){
			var url = "./print_hs.php";
			var win = window.open(url, '_blank');
            win.focus();
		}else{
			var url = "./print_main.php";
			var win = window.open(url, '_blank');
            win.focus();
		}
		
	}
	</script>
</html>