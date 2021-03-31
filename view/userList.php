<?php


function listUser($allUsers) {

	$render = '
	<div class="resultats">
			<h2>Liste des utilisateurs</h2>
			('.count($allUsers).' utilisateurs enregistrés)
			<hr/>
			<table>
			<tr><th>Id</th><th>Prénom</th><th>Nom</th><th>Email</th></tr>';

		foreach ($allUsers as $user) {
			$render .= '
			<tr>
				<td>'.$user->getId().'</td>
        <td>'.$user->getFirstName().'</td>
        <td>'.$user->getLastName().'</td>
        <td>'.$user->getEmail().'</td>
				
			</tr>';
		}

	$render .='
			</table>
		</div>';

	return $render;
}
