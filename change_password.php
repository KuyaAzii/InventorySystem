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
					<li><a  style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-cog"></i> Settings</a>
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
			<div class = "col-lg-9 well" style = "margin-top:60px;">
				<div class = "alert alert-info">Settings / Change Password</div>
						<div class = "col-lg-3"></div>
						<div class = "col-lg-6">
							<form method = "POST" action = "save_admin_query.php" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Old Password:</label>
									<input type = "password" required = "required" name = "old_password" class = "form-control" />
								</div>	
								<div class = "form-group">	
									<label>New Password:</label>
									<input type = "password" maxlength = "12" name = "new_password" required = "required" class = "form-control" />
								</div>	
								<div class = "form-group">	
									<label>Re-type Passwords:</label>
									<input type = "password" name = "re_password" required = "required" class = "form-control" />
								</div>	
								
								<div class = "form-group">	
									<button class = "btn btn-primary" name = "save_admin"><span class = "glyphicon glyphicon-save"></span> Submit</button>
								</div>
							</form>	
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
	
</html>