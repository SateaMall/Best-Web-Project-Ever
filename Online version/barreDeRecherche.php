
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
	 
<body>
<form method= "POST">
	<input type="search" name="s" placeholder="Rechercher un produit" autocomplete="off">
	<input type="submit" name="envoyer">
</form>

<section class= "afficher_produit">

<?php 

try{

 $host_name = 'db5005426273.hosting-data.io';
  $database = 'dbs4556445';
  $user_name = 'dbu2795511';
  $password = 'bdUnivFac37';



$bdd = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);

$sql1= 'SELECT * FROM produit WHERE nomProduit LIKE "%'.$recherche.'%"  OR marque LIKE "%'.$recherche.'%" OR categorie LIKE "%'.$recherche.'%" OR  prix LIKE "%'.$recherche.'%" ' ; 

	if (isset ($_POST['s']) AND !empty ($_POST['s'])){
	$recherche =  htmlspecialchars($_POST['s']);
	$allproducts = $bdd->query ($sql1) ;
	


		if ($allproducts->rowCount() > 0){
			while($product = $allproducts->fetch()){
				echo $product['nomProduit']; 
				
			}
		}
	
		else {
		echo "Aucun produit trouvé";
		}
	
	}
}
	
	catch (PDOException $e) 
	{
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  	}
?>


</section>
				  
  </body>
</html>
