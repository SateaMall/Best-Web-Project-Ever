<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://alexis.temperamentcordier.org/Projet-univ/Accueil.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Stalemate&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<title>MC-Register</title>
	<!-- CSS only -->

</head>
<body>
<?php  include('http://alexis.temperamentcordier.org/Projet-univ/Up.html');  ?>
<div class="signUp">
	<h1>Register</h1>
	<br>
	<form action="../register/register.php" method="POST">
		<input class="col-2" type="text" name="mail" placeholder="Identifiant" required>
		<input class="col-2" type="text" name="mdp" placeholder="Mot de passe" required>
		<br><br>
		<input class="col-2" type="text" name="surname" placeholder="Nom" required>
		<input class="col-2" type="text" name="name" placeholder="Prenom" required>
		<br><br>
		<input class="col-4" type="text" name="adress" placeholder="Adresse" required>
		<br><br>
		<input class="col-2" type="text" name="city" placeholder="Ville" required>
		<input class="col-2" type="text" name="phone" placeholder="N° Téléphone" required>
			<br><br>
	<button type="submit" class="buttonSign">Sign up !</button>
	</form>
</div>
</body>
</html>