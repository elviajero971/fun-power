<?php

function formSubscription() {
  global $ROUTEBASE;

	$render = <<<EOD
	<div class="formContainer">
    	<h3><b>Enregistrer un nouveau programme</b></h3>
    	<form action="$ROUTEBASE?page=createSubscription&action=check" method="post">
        <div class="form-input">
            <label for="name">Votre nom :</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-input">
            <label for="name">Votre prénom :</label>
            <input type="text" id="firstname" name="firstname">
        </div>
        <div class="form-input">
            <label for="mail">Votre e-mail :</label>
            <input type="email" id="mail" name="mail">
        </div>
        <div class="form-input">
            <label for="program-select">Choisissez un abonnement :</label>
            <select name="program" id="program-select">
                <option value="1">Essentiel</option>
                <option value="2">Standard</option>
                <option value="3">Premium</option>
            </select>
        </div>
        <div class="button">
          	<button type="submit" class="boutonSend">Souscrire</button>
     		</div>
    </form>
  </div>
EOD;
	return $render;
}