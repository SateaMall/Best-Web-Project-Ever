<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Document sans titre</title>
</head>
<?php 
	$email = $_POST['MAIL'];
	$motdp = $_POST['MDP'];
	
	if (empty($email)) {
    echo "Erreur pas de mail.";
  } else {
    echo $email;
  }
	if(empty($motdp)){
		echo "Vous n'avez pas rentré de mot de passe.";
	}
	else {
		echo $motdp;
	}
	
	
	$user="";
	$pass="";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
	
	?>
<body>
</body>
</html>
