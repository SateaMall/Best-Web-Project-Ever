<?php 

$bdd = ned PDO ('mysql : host xxxx) 
$allusers = $bdd->query ('SELECT * FROM xxxx') ; 
if (isset ($_GET ['s']) AND!empty ($_GET['s']){
	$recherche =  htmlspecialchars($_GET['s']);
	$allusers = $bdd->query ('SELECT * FROM xxxx WHERE pseudo LIKE"%'.$recherche.'%" '
) ; 
?>
DOCTYPE etc

<form method= "GET">
	<input type="search" name="s" placeholder="Rechercher un produit" autocomplete="off">
	<input type=submit" name="envoyer">
</form>

<section class= "afficher_produit">

<?php 
	if ($allusers->rowCount() > 0){
		while($product = $allusers->fetch()){
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
