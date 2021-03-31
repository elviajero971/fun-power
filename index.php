<?php
declare(strict_types=1);
session_start();

require_once('config.inc.php');
require_once('router.inc.php');

require_once('view/view.inc.php');
// require_once('view/userForm.inc.php');
// require_once('view/viewTables.inc.php');
// require_once('dao/dao.inc.php');


echo headRender();    // display html head
echo topRender();    // display connexion user

echo navigationRender();    // display html head

//instancie un routeur pour traiter la requête entrante

$router = new Router();
$router->routerRequest();

// echo "<br/><hr/>Fin du programme<br/>";
echo footRender();    // display html foot
exit();

 ?>
