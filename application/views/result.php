<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Survey Form</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">	
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div id="container">
	<div class="alert alert-success">
		Thanks for submitting this form! You have submitted this form <?php echo $this->session->userdata('counter'); ?> time/s now.
	</div>
	<div id="body">
		<h3>Submitted Information</h3>
<?php
		$post_data = $this->session->userdata('post_data');
?>
		<p>Name: <?php echo $post_data['name']; ?></p>
		<p>Dojo Location: <?php echo $post_data['location']; ?></p>
		<p>Favorite Language: <?php echo $post_data['language']; ?></p>
		<p>Comment: <?php echo $post_data['comment']; ?></p>
		<a href="/" class="btn btn-primary">Go Back</a>
	</div>
</div>
</body>
</html>