<?php 
session_start();
?>

<!doctype html>
<html>
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
<style>
        body { 
  /* The image used */
			background-color: #0A0D0A;
  background-image: url("pic.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: top;
  background-repeat: no-repeat;
  background-size: cover;	
  z-index: 7;
}
      
      .login-box {
		text-align: center; 
        width: 400px;
        height: 300px;
        margin: 7em auto;
        margin-top: 15%;
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.877);
		display: grid; 
      }
      
      h1 {
        text-align: center;
        padding-top: 15px;
      }
      
      h4 {
        text-align: center;
      }
      
      form {
        width: 300px;
        margin-left: 20px;
      }
      
      form label {
        display: flex;
        margin-top: 20px;
        font-size: 18px;
      }
      
      input {
        width: 100%;
        padding: 7px;
        outline: 0;
        border-width: 0 0 0 0;
     
        border-radius: 6px;
        outline: none;
		margin: auto;  
      }
       button{
        width: 280px;
        height: 35px;
        margin-top: 40px;
		margin-left : 40px;
        border: none;
        background-color: #49c1a2;
        color: white;
        font-size: 18px;
		margin: auto;  
      }
	  .button:hover{

      background-color: rgb(115, 253, 127);
      cursor: pointer;
      color: white;
      }  
      p {
        text-align: center;
        padding-top: 20px;
        font-size: 15px;
      }
      .para-2 {
        text-align: center;
        color: white;
        font-size: 20px;
        margin-top: -10px;
      }
      .para-2 a {
        color: orange;
      }
      
        </style>
<title>MC-Login</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	
	
	<form class="col-12" action="../login/login.php" method="POST">
	<div class="login-box">
      <h1>Login</h1>
      <form>
        <label>Email</label>
        <input  type="text" name="mail" placeholder="Identifiant" required>
        <label>Mot de passe</label>
        <input  type="password" name="mdp" placeholder="Mot de passe" required>
     	<button  type="submit" value="Envoyer" class="btn btn-success col-12">Login</button>
      </form>
    </div>
    <p class="para-2">
      Vous n'avez pas de compte? <a href="/Projet-univ/register/">Créer un compte ici</a>
    </p>
	</form>
</body>
</html>