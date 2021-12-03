<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MC-Login</title>
</head>
	
<?php 
	$email = $_POST['mail'];
	$motdp = $_POST['mdp'];
	
	
	if (empty($email)) {
    echo "Erreur pas de mail.";
  }
	if(empty($motdp)){
		echo "Vous n'avez pas rentré de mot de passe.";
	}
	
	/*On accède à la base de données.*/
  $host_name = 'db5005426273.hosting-data.io';
  $database = 'dbs4556445';
  $user_name = 'dbu2795511';
  $password = 'bdUnivFac37';
	
  try 
  {
    $bdh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
	  foreach($bdh->query('SELECT * from client') as $row) {
		
		  if($row['email']==$email && $row['motDePasse']==$motdp){
			  $_SESSION['setmail']=$email;
			  //initialiser la session avec la base de données:
			 	 $_SESSION['nom']= $row['nom'];
			 echo ( '<meta http-equiv="refresh" content="0.4;url=http://alexis.temperamentcordier.org/Projet-univ/">');
		  }
		  
        else{
			echo ( '<meta http-equiv="refresh" content="2;url=http://alexis.temperamentcordier.org/Projet-univ/login/">');
		}
		  
    }
  }
	catch (PDOException $e) 
	{
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  	}
	
	
	?>
<body>
	<p style="display: inline; float:left;"><img src="../login/loading-4.gif" width="10%" height="10%" alt=""/>
	Veuillez patienter...</p>
</body>
</html>