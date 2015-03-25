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
	<div class='row'>
		<h3> Create a Message: </h3>
			<form>
				<textarea name='postMessage'></textarea>
				<button type="submit" class="btn btn-default">Post Message</button>
			</form><!--End of post message form -->
	</div><!-- End of comment div -->

	<div class='row content'>
		<h3>Messages:</h3>
		<div class='messages'>

		<!-- Message loop begins here -->

			<div class='message'>

				<h4> First Name, Last Name, Created At </h4>
				<p> This is where the message goes</p>
				<div class='comments'>
					
					<!-- Comment loop starts here -->

					<div class='comment'>
						<h4> First Name, Last Name, Created At </h4>
						<p> This is where the comment goes
					</div><!-- End of comment div -->

					<!-- Comment loop ends here -->

				</div><!--end of comments div -->

				<h3>Comment:</h3>
				<form>
					<textarea name='postComment'></textarea>
					<button type="submit" class="btn btn-default">Post Comment</button>
					<input type='hidden' name='messages_id' value="" >
					<input type='hidden' name='users_id' value=""> 
				</form>

			</div><!-- End of one message div -->

			<!-- End of Message Loop -->

		</div><!-- End of Messages div -->

	</div><!-- End of content div -->

	
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
