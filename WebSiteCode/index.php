<?php 
session_start(); 
?>

<?php 
  //PDO: 
  try 
  {
  $host_name = 'db5005426273.hosting-data.io';
  $database = 'dbs4556445';
  $user_name = 'dbu2795511';
  $password = 'bdUnivFac37';
$bdh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
//Les Données:
$stmp=$bdh->query("SELECT * FROM produit");
$resultats=$stmp->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Accueil.css">
	
	<!-- Ajout de favicon -->
	<link rel="icon" href="LetterM.ico" />
	
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Stalemate&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title> Mélange Culturel </title>
</head>
<body>


  <?php  include('Up.php');  ?>
<!-- On génère le formulaire avec la base de donnée -->
  <form class="menu" method="POST">

  <ul class="list-unstyled">


<!-- French-->
  
  <section class="francais section" id="french">
   
  <div class="plat">
     <div class="origine" >Des plats Français: </div>
     <?php 
foreach($resultats as $resultat):

    $id= $resultat["0"];
    $nom=$resultat["1"];
    $marque=$resultat["2"];
    $categorie=$resultat["3"];
    $description=$resultat["4"];
    $photo=$resultat["5"];
    $prix=$resultat["6"];
    $stock=$resultat["7"];

      if (strcmp($marque, "AllFrench")==0):

        if (htmlspecialchars($stock)>=1){ 
      $disponibilite= "Disponible ($stock)";}
      else {
        $disponibilite="Undisponible";
      }


?>

     
   <li class="media my-4 padding" id=" <?php echo htmlspecialchars($id) ?>">
       <img class="myimg row align-self-center" src=" <?php echo htmlspecialchars($photo) ?>" alt=" <?php echo htmlspecialchars($nom) ?>">
       <div class="media-body">
         <h3 class="mt-0 mb-1 name"> <?php echo htmlspecialchars($nom)  ?></h3>
           <div class="discription" >
           <span class=" titles"> Desciption : </span> <?php echo htmlspecialchars($description) ?>
           </div>

           <div class="categorie">
            <span class=" titles"> Categorie : </span>  <?php  echo htmlspecialchars($categorie)  ?>
           </div> 

           <div class="price">
            <span class=" titles"> Prix : </span>  <?php  echo htmlspecialchars($prix)  ?>&euro;
           </div> 

           <div class="stock">
           <span class=" titles"> Stock : </span>   <span class="<?php echo htmlspecialchars($disponibilite) ?>"> <?php echo htmlspecialchars($disponibilite)?> </span>
           </div> 

           <?php if (htmlspecialchars($stock)>=1): ?>
            <input type="number" name="<?php echo htmlspecialchars($id) ?>" min="0" max="<?php echo htmlspecialchars($stock) ?>" step="1" class="form-control quantity"
          placeholder="Quantité">
        <?php endif ?>
        
        </div>
          
     </li>
    <?php  endif; 
       endforeach;  ?>

  </div> 
  <input class="btn-success" type="submit" name="Commander"></input>
  </section>




<!-- Syrian-->

<section class="Syrian section" id="syrian">
<div class="plat"> 
<div class="origine" >Des plats Syriens: </div>


<?php 
foreach($resultats as $resultat):
 
    $id=$resultat["0"];
    $nom=$resultat["1"];
    $marque=$resultat["2"];
    $categorie=$resultat["3"];
    $description=$resultat["4"];
    $photo=$resultat["5"];
    $prix=$resultat["6"];
    $stock=$resultat["7"];
 
    if (strcmp($marque, "AllSyrian")==0):
      
    if (htmlspecialchars($stock)>=1){
      $disponibilite= "Disponible ($stock)";}
      else {
        $disponibilite="Undisponible";
      }


?>

<li class="media my-4 padding" id=" <?php echo htmlspecialchars($id) ?>">
       <img class="myimg row align-self-center" src=" <?php echo htmlspecialchars($photo) ?>" alt=" <?php echo htmlspecialchars($nom) ?>">
       <div class="media-body">
         <h3 class="mt-0 mb-1 name"> <?php echo htmlspecialchars($nom)  ?></h3>
           <div class="discription" >
           <span class=" titles"> Desciption : </span> <?php echo htmlspecialchars($description) ?>
           </div>
           
           <div class="categorie">
            <span class=" titles"> Categorie : </span>  <?php  echo htmlspecialchars($categorie)  ?>
           </div> 

           <div class="price">
            <span class=" titles"> Prix : </span>  <?php  echo htmlspecialchars($prix)  ?>&euro;
           </div> 

           <div class="stock">
           <span class=" titles"> Stock : </span>   <span class="<?php echo htmlspecialchars($disponibilite) ?>"> <?php echo htmlspecialchars($disponibilite)?> </span>
           </div> 
<?php if (htmlspecialchars($stock)>=1): ?>
           <input type="number" name="<?php echo htmlspecialchars($id) ?>" min="0" max="<?php echo htmlspecialchars($stock) ?>" step="1" class="form-control quantity"
          placeholder="Quantité">
        <?php endif ?>
        </div>
          
     </li>
   
    <?php  endif; 
       endforeach;  ?>




     
   </div> 
   <input class="btn-success" type="submit" name="Commander"></input>
</section>



<!-- Tunisian-->

  <section class="tunisian section" id="tunisian">

  <div class="plat">  

     <div class="origine" >  Des plats Tunisians:  </div>

     <?php 
foreach($resultats as $resultat):
 
    $id=$resultat["0"];
    $nom=$resultat["1"];
    $marque=$resultat["2"];
    $categorie=$resultat["3"];
    $description=$resultat["4"];
    $photo=$resultat["5"];
    $prix=$resultat["6"];
    $stock=$resultat["7"];

    if (strcmp($marque, "AllTunisian")==0):

      if (htmlspecialchars($stock)>=1){
      $disponibilite= "Disponible ($stock)";}
      else {
        $disponibilite="Undisponible";
      }

?>



<li class="media my-4 padding" id=" <?php echo htmlspecialchars($id) ?>">
       <img class="myimg row align-self-center" src=" <?php echo htmlspecialchars($photo) ?>" alt=" <?php echo htmlspecialchars($nom) ?>">
       <div class="media-body">
         <h3 class="mt-0 mb-1 name"> <?php echo htmlspecialchars($nom)  ?></h3>
           <div class="discription" >
           <span class=" titles"> Desciption : </span> <?php echo htmlspecialchars($description) ?>
           </div>
           
           <div class="categorie">
            <span class=" titles"> Categorie : </span>  <?php  echo htmlspecialchars($categorie)  ?>
           </div> 
           
           <div class="price">
            <span class=" titles"> Prix : </span>  <?php  echo htmlspecialchars($prix)  ?>&euro;
           </div> 

           <div class="stock">
           <span class=" titles"> Stock : </span>   <span class="<?php echo htmlspecialchars($disponibilite) ?>"> <?php echo htmlspecialchars($disponibilite) ?> </span>
           </div> 

           <?php if (htmlspecialchars($stock)>=1): ?>
            <input type="number" name="<?php echo htmlspecialchars($id) ?>" min="0" max="<?php echo htmlspecialchars($stock) ?>" step="1" class="form-control quantity"
          placeholder="Quantité">
        <?php endif ?>
        
        </div>
          
     </li>
    <?php  endif; 
       endforeach;  ?>
	  <input class="btn-success" type="submit" name="Commander"></input>
<?php  } 
catch (PDOException $e) 
{
  echo "Erreur!: " . $e->getMessage() . "<br/>";
  die();
  }


?>
  </div> 

  </section>



</ul>

  </form>

	<!-- On va regader quels inputs ont été rentrés lors du clique : -->
	
<?php 
  $host_name = 'db5005426273.hosting-data.io';
  $database = 'dbs4556445';
  $user_name = 'dbu2795511';
  $password = 'bdUnivFac37';

echo $_POST['2'];

  try 
  {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
	  
	  
	  $count=0;
	  /*Ici on récupère les id des produits dont les inputs on été rentrés: */
	  foreach($dbh->query('SELECT * from produit') as $row) {
		  
		  $comp=$row['idProduit'];

		  if(isset($_POST["$comp"]) && !empty($_POST["$comp"]) && isset($_SESSION['setmail']) && !empty($_SESSION['setmail'])){
			  
			  
			  /*On ajoute à la db "commandes" :*/
			  if($count==0){
				  $sql1="INSERT INTO commandes (idCommande, date, etat, email) VALUES (NULL, CURRENT_DATE(), 'En cours', '".$_SESSION['setmail']."')";
			  	  $query1=$dbh->prepare($sql1);
			      $query1->execute();
				  $count=$count+1;
			  }
			  
			  
			  /*On parcours le tableau "produit" pour trouver le "prix" et l'"idCommande" :*/
			  foreach($dbh->query("SELECT * FROM produit WHERE idProduit=$comp") as $prix){
			  }
			  foreach ($dbh->query("SELECT max(idCommande) as idComm FROM commandes") as $idCom){  
			  }
			 
			  /*On rentre les variable reçus dans les foreach :*/
			  $sql2="INSERT INTO lignescommandes (idLigneCommande, idCommande, idProduit, quantite, montant) VALUES (NULL , ".$idCom['idComm'].", $comp, ".$_POST["$comp"].", ". $prix['prix']*$_POST["$comp"] ." )";
			  
			  
			  $query2=$dbh->prepare($sql2);
			  $query2->execute();
		  }
		  
		  else{}
		  
	  }
	  
	  
  }
	catch (PDOException $e) 
	{
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  	}
	
	?>
	
<!-- On affiche les avis -->
<section class ="avis" id="avis">
   <div class="container">
       <ul class ="ul-avis">
          <li class="li-avis">
            <img class="img-portrait" src="img/satea.jpg" alt="Portrait">
            <blockquote>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, dignissimos quibusdam! Vitae cumque quidem commodi! Ratione fugit soluta aliquam assumenda, corrupti reprehenderit quaerat cum reiciendis. Optio illum consequatur quasi eius. "</blockquote> 
            <cite> - Satea 
          </li>

          <li class="li-avis">
            <img class="img-portrait" src="img/maryam.jpeg" alt="Portrait">
            <blockquote>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, dignissimos quibusdam! Vitae cumque quidem commodi! Ratione fugit soluta aliquam assumenda, corrupti reprehenderit quaerat cum reiciendis. Optio illum consequatur quasi eius. "</blockquote> 
            <cite> - Maryam
          </li>

          <li class="li-avis ">
            <img class="img-portrait" src="img/alexis.jpg" alt="Portrait">
            <blockquote>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, dignissimos quibusdam! Vitae cumque quidem commodi! Ratione fugit soluta aliquam assumenda, corrupti reprehenderit quaerat cum reiciendis. Optio illum consequatur quasi eius. "</blockquote> 
            <cite> - Alexis
          </li>
       </ul>
   </div>
   
</section>
  
<?php  
include('Down.html'); 
?>
</body>
</html>