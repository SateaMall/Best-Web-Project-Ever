<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MC-Chargement</title>
</head>

<body>
	
<?php
	//errors check
	$mail=$_POST['mail'];
	$mdp=$_POST['mdp'];
	$surname=$_POST['surname'];
	$name=$_POST['name'];
	$adress=$_POST['adress'];
	$city=$_POST['city'];
	$phone=$_POST['phone'];
	$phone=(int)$phone;
	
	/*On verrifie que tous les paramètres sont les bons*/
	if (empty($mail)|| empty($mdp) || empty($surname)|| empty($name)|| empty($adress) || empty($city) || empty($phone)) {
	echo '<img src="../register/error_gif.gif" alt=""/>';
	echo '<style> body {
	background-color: #141117;
	}</style>';
	echo ( '<meta http-equiv="refresh" content="2;url=http://alexis.temperamentcordier.org/Projet-univ/register/">');
    exit(1);
  }
	
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
	
</body>
</html>