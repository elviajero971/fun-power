<?php
class ControlCreateSubscription extends ControlMain {
  // require_once "../model/Article.class.php";

  public function __construct($action="start") {
    $this->action = $action;
  }

  public function run() {
    
    switch ($this->action) {
        case "start":
          echo "form subscription";
            require_once "view/subscriptionForm.inc.php";
            echo formSubscription();
            break;
        case "check":
            echo "Souscription en cours de traitement !";
            $userFirstName="";
            if (isset($_POST["name"])) {
              $userFirstName = htmlspecialchars($_POST["name"]);
            }
            $userLastName="";
            if (isset($_POST["firstname"])) {
              $userLastName = htmlspecialchars($_POST["firstname"]);
            }
            $userEmail="";
            if (isset($_POST["mail"])) {
              $userEmail = htmlspecialchars($_POST["mail"]);
            }
            $program="";
            if (isset($_POST["program"])) {
              $program = htmlspecialchars($_POST["program"]);
            }
            
            echo "<br>".$userFirstName.":email:".$userEmail."</br>";
            require_once "dao/dao.php";
            require_once "dao/daoSubscription.php";

            $temp=new SubscriptionDao();
            $temp->insert($userFirstName, $userLastName, $userEmail, $program);
            break;
        default:
            exit("Erreur");
    }
  }



}
