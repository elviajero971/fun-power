<?php


function listProgram($allPrograms) {

	$render = '
	<div class="resultats">
			<h2>Liste des programmes</h2>
			('.count($allPrograms).' programmes enregistrés)
			<hr/>
			<table>
			<tr><th>Id</th><th>Titre</th></tr>';

		foreach ($allPrograms as $program) {
			$render .= '
			<tr>
				<td>'.$program->getId().'</td>
				<td>'.$program->getProgTitle().'</td>
				<form action="'.ROUTEBASE.'?page=showArticles&action=showOne" method="post">
					<input type="hidden" name="articleId" value="'.$program->getId().'">
					<td><button type="submit" class="button100 buttonGreen">Voir</button></td>
				</form>
			</tr>';
		}

	$render .='
			</table>
		</div>';

	return $render;
}
