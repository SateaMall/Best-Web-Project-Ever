<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Accueil.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Stalemate&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title> Nom de Page </title>
</head>
<body>
  <?php include('Up.php');  ?>

	
	<?php
/*On accède à la base de données.*/
  $host_name = 'db5005426273.hosting-data.io';
  $database = 'dbs4556445';
  $user_name = 'dbu2795511';
  $password = 'bdUnivFac37';
	
	
	
  try {
    $bdh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
	  $sql= " SELECT * FROM client WHERE email='$mail' ";
	  $result = $bdh->prepare($sql);
	  $result -> execute();
	  
	  if($result->rowCount()>0){
		  echo "<h3> Déjà inscrit... ça sert à rien de s'inscrire 2 fois. Et encore moins une troisième fois.</h3>";
		  echo ( '<meta http-equiv="refresh" content="5;url=http://alexis.temperamentcordier.org/Projet-univ/">');
	  }
	  else{
		  $bdh->query("INSERT INTO client (email, motDePasse, nom, prenom, ville, addresse, numTelephone) VALUES ('$mail', '$mdp', '$surname', '$name', '$city', '$adress', '$phone')");
		  echo "Vous avez été inscrit, vous allez être redirigé et vous pourrez vous connecter.";
		  echo ( '<meta http-equiv="refresh" content="2;url=http://alexis.temperamentcordier.org/Projet-univ/">');
		  
	  }
    }
	
	
catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  	}
	

?>


<?php include('Down.html');  ?>
</body>
</html>
