<?php
session_start();
setcookie('PHPSSEID', 'session_start()', time()+(60*60*24*30), "/; SameSite=None; Secure");
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MC-Login</title>
</head>
	
	<body class="background">
<?php 
	$email = $_POST['mail'];
	$motdp = $_POST['mdp'];
	
	
	if (empty($email)|| empty($motdp)) {
	echo '<img src="../login/error_gif.gif" alt=""/>';
	echo '<style> body {
	background-color: #141117;
	}</style>';
	echo ( '<meta http-equiv="refresh" content="2;url=http://alexis.temperamentcordier.org/Projet-univ/login/">');
    exit(1);
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
			  $_SESSION['prenom']= $row['prenom'];
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
	<p style="display: inline; float:left;">
	Veuillez patienter...</p>
</body>
</html>