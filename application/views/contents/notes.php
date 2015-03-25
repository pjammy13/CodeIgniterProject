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
    $this->load->view('partials/headerOff');
?>
<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="container">
		<h1> Notes </h1>

		<div class='newNote'>
			<form action='/notes/create' method='post' class='create'>
				<label>Note Title</label>
				<input type='text' name='title'>
				<input type='submit' value='Insert Note!'>
			</form>
		</div>

		<div class='allNotes'>
			<!-- start forloop -->        
			<div class='note' id="">
				<form action ='/notes/update' method='post' class='update'>
					<input type='hidden' name='id' value="">
					<input type='text' name='title' value=''>
					<input type='text' name='description' value=''>
					<input type='submit' value='Update'>
				</form>
				<form action="/notes/destroy" method='post' class='destroy'>
					<input type='hidden' name='id' value="">
					<input type='submit' value='Destroy!'>
				</form>
			</div>
			<!-- end forloop -->
		</div>

		
	</div><!-- End of container div -->

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
