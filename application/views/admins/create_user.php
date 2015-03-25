<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Code Igniter Project</title>
    <meta name="description" content="Code Igniter Project">
    <meta name="author" content="Jammy">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet/less" type="text/css" href="/assets/css/styles.less">
    

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</head>
<body>

<?php
    $this->load->view('partials/headerIn');
?>
<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="container">
		<h1>Admin Create New User</h1>
		<form>
			<div class="form-group">
				<label>Email address</label>
				<input type="email" class="form-control" placeholder="Enter email" name='email'>
			</div>
			<div class="form-group">
				<label>First Name</label>
				<input type="text" class="form-control"  placeholder="First Name" name='first_name'>
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" class="form-control" placeholder="Last Name" name='last_name'>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" placeholder="Password" name='password'>
			</div>
			<div class="form-group">
				<label>Password Confirmation</label>
				<input type="password" class="form-control" placeholder="Password" name='confirm_password'>
			</div>
			<button type="submit" class="btn btn-default">Create</button>
		</form>
	</div><!-- ENd of container div -->

<!-- Scripts
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script src="/assets/css/less.js" type="text/javascript"></script>
<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/script.js"></script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
