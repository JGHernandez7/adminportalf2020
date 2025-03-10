<!DOCTYPE html>
<html>
<head>
	<title>Admin - Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
</head>

<?php
if($this->session->flashdata('success'))
{
	?>
<div class="alert alert-success" role="alert">
	<?php
		echo $this->session->flashdata('success');
	?>
</div>
<?php
}

else if($this->session->flashdata('failure'))
{
	?>
<div class="alert alert-danger" role="alert">
	<?php
		echo $this->session->flashdata('failure');
	?>
</div>
<?php
}

else if($this->session->flashdata('error'))
{
	?>
<div class="alert alert-warning" role="alert">
	<?php
		echo $this->session->flashdata('error');
	?>
</div>
<?php
}
?>

<body>
	<div class="login col-md-4 mx-auto text-center">
		<h1>Admin Login</h1>
		<form method="post" action="<?php echo site_url('admin/login/verify')?>">
			<div class="form-group">
				<input type="text" name="username" placeholder="Username" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Login" class="btn btn-primary">
			</div>
		</form>
		<a href="<?php echo base_url('admin/register/add') ?>" class="btn btn-info">Register</a>
	</div>
</body>
</html>