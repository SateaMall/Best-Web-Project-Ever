<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MC-Register</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1>Register</h1>
	<br>
	<form action="../register/register.php" method="POST">
		<input class="col-2" type="text" name="mail" placeholder="Identifiant">
		<input class="col-2" type="text" name="mdp" placeholder="Mot de passe">
		<br><br>
		<input class="col-2" type="text" name="surname" placeholder="Nom">
		<input class="col-2" type="text" name="name" placeholder="Prenom">
		<br><br>
		<input class="col-4" type="text" name="adress" placeholder="Adresse">
		<br><br>
		<input class="col-2" type="text" name="city" placeholder="Ville">
		<input class="col-2" type="text" name="phone" placeholder="N° Téléphone">
			<br><br>
	<button type="submit" class="btn btn-success">Sign up !</button>
	</form>
	
</body>
</html>