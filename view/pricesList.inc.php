<?php

function priceList() {
	$render = '
	<div class="resultats">
		<h2>Prix en fonction de l\'âge</h2>
		<hr/>';

    foreach (PRICEAGE as $key => $value) {
      $render .= 'De <b>'.$value[0].'</b> à <b>'.$value[1].'</b> ans : '.$value[2].'€ la leçon<br/>';
    }

	$render .= '
    <h2>Remise en fonction du nombre de leçons</h2>
    <hr/>';

    foreach (DISCOUNTLESSONS as $key => $value) {
      $render .= 'Plus de <b>'.$value[0].'</b> leçons : -'.$value[1].'%<br/>';
    }


	$render .= '
	   </div>';
  return $render;
}
