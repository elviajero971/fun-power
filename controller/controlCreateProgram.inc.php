<?php
class ControlCreateProgram extends ControlMain {
  // require_once "../model/Article.class.php";

  public function __construct($action="start") {
    $this->action = $action;
  }

  public function run() {
    switch ($this->action) {
        case "start":
            require_once "view/programForm.inc.php";
            echo formProgram();
            break;
        case "check":
            echo "Programme envoyé !";
            $programTitle="";
            if (isset($_POST["programTitle"])) {
              $programTitle = htmlspecialchars($_POST["programTitle"]);
            }
            $programDescription="";
            if (isset($_POST["programDescription"])) {
              $programDescription = htmlspecialchars($_POST["programDescription"]);
            }
            $programDuration="";
            if (isset($_POST["programDuration"])) {
              $programDuration = htmlspecialchars($_POST["programDuration"]);
            }
            $programPrice="";
            if (isset($_POST["programPrice"])) {
              $programPrice = htmlspecialchars($_POST["programPrice"]);
            }
            
            // echo "<br>".$title."</br>".$articleContent;
            require_once "dao/dao.php";
            require_once "dao/daoProgram.php";

            $temp=new ProgramDao();
            $temp->insert($programTitle, $programDescription, $programDuration, $programPrice);
            break;
        default:
            exit("Erreur");
    }
  }



}
