
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
	 
<body>
<form method= "GET">
	<input type="search" name="s" placeholder="Rechercher un produit" autocomplete="off">
	<input type="submit" name="envoyer">
</form>

<section class= "afficher_produit">

<?php 

$user="e20200010272";$pass="xxxxx";



$bdd = new PDO('mysql:host=mysql.etu.umontpellier.fr;
dbname=e20200010272; charset=UTF8', $user, $pass,
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,));




$allproducts = $bdd->query ('SELECT * FROM produit') ; 
if (isset ($_GET ['s']) AND !empty ($_GET['s'])){
	$recherche =  htmlspecialchars($_GET['s']);
	$allproducts = $bdd->query ('SELECT * FROM produit WHERE nomProduit LIKE "%'.$recherche.'%" ') ; 
} 



	if ($allproducts->rowCount() > 0){
		while($product = $allproducts->fetch()){
			?>
			<p> <?= $product['nomProduit']; ?></p>
			<?php
}
	} else {
	?>
	<p> Aucun produit trouvé</p>
	<?php 
	}

?>


</section>
				  
  </body>
</html>
