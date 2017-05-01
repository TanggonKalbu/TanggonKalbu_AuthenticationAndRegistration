<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="jumbotron">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open('login/cekLogin'); ?>
			<h1>Login</h1>
			<?php echo validation_errors(); ?>
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				</div>			
				<button type="submit" class="btn btn-primary btn-lg">Login</button>
				<a href="<?php echo site_url('register') ?>"> <button type="button" class="btn btn-warning btn-lg">Register</button></a>
			<?php echo form_close(); ?>
			</div>
		</div>
	</div>
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>