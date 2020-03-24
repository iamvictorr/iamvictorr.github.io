<!DOCTYPE html>
<html>
	<head>
		<title>Speedrun Login</title>
		<link rel="stylesheet" type="text/css" href="/styles/theme.css" />
		<script src="/scripts/menu.js" type="application/javascript"></script>
	</head>
	
	
	<body>
        <?php require '../modules/header.php'; ?>
			<h1>Sign In</h1>
			
			<form method="post" action="___________">
				<div id="login-form">
					<label>Username:</label>
					<input type="text" name="username" required>
					<br />
					<label>Password:</label>
					<input type="password" name="password" required>
					<br /><br />
					<button type="submit" id="login-button">Sign In</button>
				</div>

			</form>
		
		
        <?php require '../modules/footer.php'; ?>
	</body>
</html>
