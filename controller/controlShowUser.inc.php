<?php

class ControlShowUser extends ControlMain {

  public function __construct($action="list") {
    $this->action = $action;
  }

  public function run() {
    require_once "model/User.class.php";
    require_once "dao/dao.php";
    require_once "dao/daoUser.php";

    switch ($this->action) {
        case "list":
            require_once "view/UserList.php";
            $temp=new UserDao();
            $allUsers=$temp->getAll();
            echo listUser($allUsers);
            break;
        default:
            exit("Erreur");
    }
  }


}
