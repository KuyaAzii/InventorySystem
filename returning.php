<!DOCTYPE html>
<?php
	require_once 'valid.php';
?>	
<html lang = "eng">
<title>HS Science Laboratory</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
	</head>
	<body style = "background-color:#d3d3d3;">
		<nav class = "navbar navbar-default navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.png" width = "50px" height = "50px" />
					<h4 class = "navbar-text navbar-right">Inventory</h4>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<div class = "col-lg-2 well" style = "margin-top:60px;">
				<div class = "container-fluid">
					<img src = "images/user.png" width = "50px" height = "50px"/>
					<br />
					<br />
					<label class = "text-muted"><?php require'account.php'; echo $name;?></label>
				</div>
				<hr style = "border:1px dotted #d3d3d3;"/>
				<ul id = "menu" class = "nav menu">
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "home.php"><i class = "glyphicon glyphicon-home"></i> Home</a></li>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "book.php"><i class = "glyphicon glyphicon-book"></i> Items</a></li>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-tasks"></i> Logs</a>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-tasks"></i> About</a>
					<li><a  style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-cog"></i> Settings</a>
						<ul style = "list-style-type:none;">
							<li><a style = "font-size:15px;" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-9 well" style = "margin-top:60px;">
				<div class = "alert alert-info">Transaction / Returning</div>
				<form method = "POST" action = "return.php" enctype = "multipart/form-data">	
					<table id = "table" class = "table table-bordered">
						<thead class = "alert-success">
							<tr>
								<th>Student</th>
								<th>Book Title</th>
								<th>Book Author</th>
								<th>Status</th>
								<th>Date Returned</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$qreturn = $conn->query("SELECT * FROM `borrowing`") or die(mysqli_error());
								while($freturn = $qreturn->fetch_array()){
							?>
							<tr>
								<td>
									<?php
										$qstudent = $conn->query("SELECT * FROM `student` WHERE `student_no` = '$freturn[student_no]'") or die(mysqli_error());
										$fstudent = $qstudent->fetch_array();
										echo $fstudent['firstname']."".$fstudent['lastname'];
									?>
								</td>
								<td>
									<?php
										$qbook = $conn->query("SELECT * FROM `book` WHERE `book_id` = '$freturn[book_id]'") or die(mysqli_error());
										$fbook = $qbook->fetch_array();
										echo $fbook['book_title'];
									?>
								</td>
								<td>
									<?php
										$qbook = $conn->query("SELECT * FROM `book` WHERE `book_id` = '$freturn[book_id]'") or die(mysqli_error());
										$fbook = $qbook->fetch_array();
										echo $fbook['book_author'];
									?>
								</td>
								<td><?php echo $freturn['status']?></td>
								<td><?php echo date("m-d-Y", strtotime($freturn['date']))?></td>
								<td>
									<?php 
										if($freturn['status'] == 'Returned'){
										echo '<center><button disabled = "disabled" class = "btn btn-primary" type = "button" href = "#" data-toggle = "modal" data-target = "#return"><span class = "glyphicon glyphicon-check"></span> Returned</button></center>';	
										}else{
										echo '<input type = "hidden" name = "borrow_id" value = "'.$freturn['borrow_id'].'"/><center><button class = "btn btn-primary" data-toggle = "modal" data-target = "#return"><span class = "glyphicon glyphicon-unchecked"></span> Return</button></center>';
										}
									?>
								</td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				<br />
				<br />
				<br />
			</div>
		</div>
		<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
				<label class = "navbar-text pull-left">Developed By: CHMSC TEAM - Alijis</label>
				<label class = "navbar-text pull-right">Library System &copy; All rights reserved 2016</label>
			</div>
		</nav>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<script src = "js/sidebar.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script src = "js/chosen.jquery.min.js"></script>	
	<script type = "text/javascript">
		$(document).ready(function(){
			$("#student").chosen({ width:"auto" });	
		})
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$("#table").DataTable();
		});
	</script>
</html>