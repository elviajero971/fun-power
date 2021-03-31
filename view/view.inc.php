
<?php

function headRender() {
	$render = <<<EOD
	<!DOCTYPE html>
	<html>
	<head>
		<title>Php POO - TP Blog</title>
    	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

EOD;
	return $render;
}

function topRender() {
	$render = <<<EOD
	<div class="connexion">
		<div class="blue">Utilisateur : inconnu</div>
	</div>
EOD;

	return $render;
}



function connectRender() {
	global $user;

	$render = <<<EOD
	<div class="connexion">
		<div class="blue">Utilisateur : $user</div>
	</div>
EOD;

	return $render;
}


function navigationRender() {
	global $ROUTEBASE;
	$render = <<<EOD
	<div class="navigContainer">
		<img src="public/images/grenouille-zen-1.png" class="logo" />
		<a href="$ROUTEBASE?page=home" class="menuButton">
			Accueil
		</a>
		<a href="$ROUTEBASE?page=createProgram&action=start" class="menuButton">
			Créer un programme
		</a>
		<a href="$ROUTEBASE?page=showProgram&action=list" class="menuButton">
			Voir les programmes
		</a>
		<a href="$ROUTEBASE?page=showUser&action=list" class="menuButton">
			Voir les utilisateurs
		</a>
		<a href="$ROUTEBASE?page=showSubscription&action=list" class="menuButton">
			Voir les souscriptions
		</a>
		<a href="$ROUTEBASE?page=createSubscription&action=start" class="menuButton">
			Souscrire un abonnement
		</a>
	</div>

EOD;
	return $render;
}


function littleForm() {
	global $ROUTEBASE;
	$render = <<<EOD
	<div class="formContainer">
    	<form action="$ROUTEBASE?page=nom" method="post">
    		<div class="espace5">
      	    <label for="name">Ton blaze !</label>
     	      <input type="text" id="name" name="name">
    	  </div>
       		<div class="button">
            	<button type="submit" class="boutonSend">Envoyer</button>
       		 </div>
    	</form>
  </div>
EOD;
	return $render;
}



function footRender() {
	$render = <<<EOD
	</body>
	</html>
EOD;
	return $render;
}
