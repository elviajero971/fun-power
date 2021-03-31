<?php

class Router {
    private $route;

    public function routerRequest() {
        try {
            $route = "home";    // Route par défaut => page d'accueil
            if (isset($_GET["page"])) {
              $route = htmlspecialchars($_GET["page"]);
              // echo "<hr>La route est : <b>".$route."</b><br/>";
            }

            $action = "start";    // Action par défaut
            if (isset($_GET["action"])) {
              $action = htmlspecialchars($_GET["action"]);
              // echo "L'action est' : <b>".$action."</b><br/>";
            }

            // on créé le controleur
            $controller = $this->createController($route, $action);
            $controller->run();
        }
        catch (Exception $e) {
            $this->gererErreur($e);
        }
    }

    private function createController($route, $action) {
        $controllerName = ROUTE[$route];
        // echo "Le contrôleur est : <b>".$controllerName."</b><br/>";

        // Check si le fichier du contrôleur existe
        $controllerFile = "controller/" . $controllerName . ".inc.php";
        $controllerClass = ucfirst($controllerName);

        if (file_exists($controllerFile)) {
            // echo "<br><br><b>*** OK ***</b> Le fichier du contrôleur est : <b>".$controllerFile."</b>
            // (la classe du controlleur est : <b>".$controllerClass.
            // "</b> - L'action est : <b>".$action."</b>)
            // <br/>";

            // Charge le fichier du contrôleur
            require_once "controller/controlMain.inc.php";
            require_once($controllerFile);
            $controller = new $controllerClass($action);
            return $controller;
        }
        else {
            echo "<br><br/><b>**** ERROR ****</b> Le fichier du contrôleur : <b>".$controllerFile."</b> n'existe pas !!!<br/>";
        }
    }

    // gestion et affichage des erreurs
    private function gererErreur(Exception $exception) {
        //-------
    }
}
