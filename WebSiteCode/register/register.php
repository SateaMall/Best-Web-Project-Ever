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
	
	/*echo $mail;
	echo $mdp;
	echo $surname;
	echo $name;
	echo $adress;
	echo $city;
	echo $phone;*/
	
	if (empty($mail)) {
    	echo "Erreur 01";
  }
	if(empty($mdp)){
		echo "Erreur 02";
	}
	if(empty($surname)){
		echo "Erreur 03";
	}
	if(empty($name)){
		echo "Erreur 04";
	}
	if(empty($adress)){
		echo "Erreur 05";
	}
	if(empty($city)){
		echo "Erreur 06";
	}
	if(empty($phone)){
		echo "Erreur 07";
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