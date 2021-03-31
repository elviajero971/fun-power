<?php

class Subscription {
    private $id = "";
    private $subsDate = "";
    // fk_progId
    // fk_userId
    

    public function __construct($id="", $progTitle,$progDuration, $progDescription, $progPrice) {
        $this->id = $id;
        $this->progTitle = $progTitle;
        $this->progDuration = $progDuration;
        $this->progDescription = $progDescription;
        $this->progPrice = $progPrice;
    }

    public function show() {
        echo "<br><hr>Données transmises :<br/>";
        echo "Titre : <b>".$this->progTitle."</b><br/>";
        echo "Description : <b>".$this->progDescription."</b><br/>";
        echo "Durée : <b>".$this->progDuration."</b><br/>";
        echo "Prix : <b>".$this->progPrice."</b><br/>";
      }

    public function getId() {
      return $this->id;
    }

    public function getProgTitle() {
      return $this->progTitle;
    }

    public function getProgDescription() {
      return $this->progDescription;
    }

    public function getProgDuration() {
      return $this->progDuration;
    }

    public function getProgPrice() {
      return $this->progPrice;
    }

}