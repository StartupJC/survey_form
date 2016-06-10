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
	<div id="body">
		<form action="/survey/process" method="post">
			<label>Your Name:</label>
			<input type="text" name="name" required> <br>
			<label>Dojo Location: </label>
			<select name="location" required>
				<option value="Mountain View">Mountain View</option>
				<option value="Seattle">Seattle</option>
			</select> <br>
			<label>Favorite Language:</label>
			<select name="language" required>
				<option value="Javascript">Javascript</option>
				<option value="PHP">PHP</option>
			</select> <br>
			<label>Comment (Optional):</label> <br>
			<textarea name="comment" cols="30" rows="10"></textarea> <br>
			<input type="submit" value="submit">
		</form>
	</div>
</div>
</body>
</html>