<?php

class ControlShowSubscriptions extends ControlMain {

  public function __construct($action="list") {
    $this->action = $action;
  }

  public function run() {
    require_once "model/Subscription.class.php";
    require_once "dao/dao.php";
    require_once "dao/daoSubscription.php";

    switch ($this->action) {
        case "list":
            require_once "view/subscriptionList.php";
            $temp=new SubscriptionDao();
            $allSubscriptions=$temp->getAll();
            
            echo listSubscription($allSubscriptions);
            break;
        default:
            exit("Erreur");
    }
  }


}