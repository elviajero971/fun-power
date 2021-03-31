<?php

class ControlShowPrograms extends ControlMain {

  public function __construct($action="list") {
    $this->action = $action;
  }

  public function run() {
    require_once "model/Program.class.php";
    require_once "dao/dao.php";
    require_once "dao/daoProgram.php";

    switch ($this->action) {
        case "list":
            require_once "view/programList.php";
            $temp=new ProgramDao();
            $allPrograms=$temp->getAll();
            echo listProgram($allPrograms);
            break;

        case "showOne":
            require_once "view/articleOne.php";
            $articleID = 1;
            if (isset($_POST["articleId"])) {
              $articleID = htmlspecialchars($_POST["articleId"]);
            }
            $temp=new PostDao();
            $article=$temp->getOne($articleID);
            echo oneArticle($article);
            break;

        case "deleteCheck":
            require_once "view/articleOne.php";
            $articleID = 1;
            if (isset($_POST["articleId"])) {
              $articleID = htmlspecialchars($_POST["articleId"]);
            }
            $temp=new PostDao();
            $article=$temp->getOne($articleID);
            echo oneArticleDelete($article);
            break;

        case "confirmDelete":
            require_once "view/articleOne.php";
            $articleID = 1;
            if (isset($_POST["articleId"])) {
              $articleID = htmlspecialchars($_POST["articleId"]);
            }
            $temp=new PostDao();
            $article=$temp->getOne($articleID);
            $temp->deleteOne($articleID);
            echo oneGetDeleted($article);
            break;

        default:
            exit("Erreur");
    }
  }


}
