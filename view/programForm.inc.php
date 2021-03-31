<?php

function formProgram() {
  global $ROUTEBASE;

	$render = <<<EOD
	<div class="formContainer">
    	<h3><b>Enregistrer un nouveau programme</b></h3>
    	<form action="$ROUTEBASE?page=createProgram&action=check" method="post">
    		<div class="espace5">
          <label for="programTitle">Titre du programme</label>
          <input type="text" id="programTitle" name="programTitle">
    	  </div>
        <div class="espace5">
          <label for="programDescription">Description</label>
          <textarea id="programDescription" name="programDescription">
          </textarea>
        </div>
        <div class="espace5">
          <label for="programDuration">Durée du programme (en mois)</label>
          <input type="number" id="programDuration" name="programDuration">
        </div>
        <div class="espace5">
          <label for="programPrice">Tarif du programme</label>
          <input type="number" id="programPrice" name="programPrice">
    	  </div>
     		<div class="button">
          	<button type="submit" class="boutonSend">Créer le programme</button>
     		 </div>
    	</form>
  </div>
EOD;
	return $render;
}