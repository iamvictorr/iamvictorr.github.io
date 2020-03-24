<!DOCTYPE html>
<html>
	<head>
		<title>Speedrun Contact Us Page</title>
		<link rel="stylesheet" type="text/css" href="/styles/theme.css" />
		<script src="/scripts/menu.js" type="application/javascript"></script>
	</head>
	<body>
		<?php require './modules/header.php'; ?>
		<h1>Contact Us</h1>
		
		<form method="get" action="___________________.php">
			<div class="Contact-data">
				<label>Name:</label>
				<input type="text" name="name">
			</div>
			<div class="Contact-data">
				<label>Email:</label>
				<input type="text" name="email">
			</div>
			<div class="Contact-data">
				<label>Message:</label>
				<input type="text" name="message">
			</div>
			<div class="Contact-data">
				<button class="button" type="submit" name="Submit">Submit</button>
			</div>
		</form>
		<?php require './modules/footer.php'; ?>
	</body>
</html>
