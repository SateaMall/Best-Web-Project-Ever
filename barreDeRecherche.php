<?php 
$user="e20200010272";$pass="xxxx";
try{
$bdd = new PDO('mysql:host=mysql.etu.umontpellier.fr;
dbname=e20200010272; charset=UTF8', $user, $pass,
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,));

} catch(PDOException $e){
echo $e->getMessage();
die("Connexion impossible !");

}

$allproducts = $bdd->query ('SELECT * FROM produit') ; 
if (isset ($_GET ['s']) AND !empty ($_GET['s']){
	$recherche =  htmlspecialchars($_GET['s']);
	$allproducts = $bdd->query ('SELECT * FROM produit WHERE idProduit LIKE "%'.$recherche.'%" '
) ; 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
	 
<body>
<form method= "GET">
	<input type="search" name="s" placeholder="Rechercher un produit" autocomplete="off">
	<input type=submit" name="envoyer">
</form>

<section class= "afficher_produit">

<?php 
	if ($allproducts->rowCount() > 0){
		while($product = $allproducts->fetch()){
			?>
			<p> <?= $product['idProduit']; ?></p>
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

