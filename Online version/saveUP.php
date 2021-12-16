<?php 
session_start();
setcookie('monCookie', 'maValeur', time()+(60*60*24*30), "/; SameSite=None; Secure");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Accueil.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Stalemate&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title> Nom de Page </title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark ">
    <div class="brand" href="#">Mélange <spin>Culturel</spin></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nos Produits
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Français</a>
            <a class="dropdown-item" href="#">Syrien</a>
            <a class="dropdown-item" href="#">Tunisian</a>
          </div>
        </li>
      </ul>
		
		<?php if(isset($_SESSION['setmail'])): ?>
		<div class="buttons2">
			
			<p class="text-white" style="display:inline; float:left;">
				<?php echo "Merci d'être ici " . $_SESSION['nom'];?>
			</p>
			
          	<button class="button" type="button" onclick="window.location.href = 'http://alexis.temperamentcordier.org/Projet-univ/logout';">Sign Out</button>
        </div>
		
		<?php else: ?>
        <div class="buttons2">
          <button class="button" type="button" onclick="window.location.href = 'http://alexis.temperamentcordier.org/Projet-univ/login';">Sign in</button>
          <button class="button" type="button" onclick="window.location.href = 'http://alexis.temperamentcordier.org/Projet-univ/register';">Sign up</button>
        </div>
		
		<?php endif; ?>
		
    </div>
  </nav>
  </header> 
  
</body>
</html>
