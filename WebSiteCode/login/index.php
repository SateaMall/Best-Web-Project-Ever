<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MC-Login</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<h1>Login</h1>
	<br>
	<form action="../login/login.php" method="POST">
	<input type="text" name="mail" placeholder="Identifiant">
	<input type="password" name="mdp" placeholder="Mot de passe" required>
	<button type="submit" class="btn btn-success">Login</button>
	</form>
	
</body>
</html>