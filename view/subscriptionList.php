<?php


function listSubscription($allSubscriptions) {
	$render = '
	<div class="resultats">
			<h2>Liste des souscriptions</h2>
			('.count($allSubscriptions).' souscriptions enregistrés)
			<hr/>
			<table>
			<tr><th>Id</th><th>Date</th><th>Programme</th><th>Tarif</th><th>Prénom</th><th>Nom</th><th>Email</th></tr>';

		foreach ($allSubscriptions as $sub) {
			$render .= '
			<tr>
				<td>'.$sub->getId().'</td>
        <td>'.$sub->getsubsDate().'</td>
        <td>'.$sub->getProgram().'</td>
        <td>'.$sub->getPrice().'</td>
        <td>Souscrit par: '.$sub->getName().'</td>
        <td>'.$sub->getLastName().'</td>
        <td>'.$sub->getEmail().'</td>
			</tr>';
		}
	$render .='
			</table>
		</div>';
	return $render;
}
