<!DOCTYPE html>
<html>
<head>
	<title>Admin - Register</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('bootstrap/css/bootstrap.css')?>">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo site_url('bootstrap/js/bootstrap.js')?>"></script>
</head>

<body>
<div class="login col-md-4 mx-auto text-center">
	<h1> Admin Registration</h1>
<br>
</div>
	<form action="<?php echo site_url('admin/register/save'); ?>" method="post">
		<div class="col-md-7">
			<div class="form-group">
				<div class="row">
					<label class="col-md-3">Name</label>
					<div class="col-md-9">
						<input type="text" name="name" class="form-control">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-3">Username</label>
					<div class="col-md-9">
						<input type="text" name="username" class="form-control">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-3">Password</label>
					<div class="col-md-9">
						<input type="password" name="password" class="form-control">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-3">Confirm Password</label>
					<div class="col-md-9">
						<input type="password" name="password_c" class="form-control">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-3">Role</label>
					<select name="role" class="col-md-9">
						<option value="support">Support</option>
						<option value="finance">Finance</option>
						<option value="sales">Sales</option>
						<option value="hr">HR</option>
						<option value="technology">Technology</option>
					</select>
					<div class="clearfix"></div>
				</div>
			</div>
			<input type="submit" name="submit" class="btn btn-info" value="save">
		</div>
		<div class="clearfix"></div>
	</form>
</body>
</html>