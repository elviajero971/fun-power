<?php

class Subscription {
    private $id = "";
    private $subsDate = "";
    private $prog = "";
    private $price = "";
    private $name = "";
    private $lastname = "";
    private $email = "";
    // fk_progId
    // fk_userId
    

    public function __construct($id="", $subsDate, $prog, $price ,$name, $lastname, $email) {
        $this->id = $id;
        $this->subsDate = $subsDate;
        $this->prog = $prog;
        $this->price = $price;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    public function getId() {
      return $this->id;
    }

    public function getsubsDate() {
      return $this->subsDate;
    }

    public function getProg() {
      return $this->prog;
    }

    public function getPrice() {
      return $this->price;
    }

    public function getName() {
      return $this->name;
    }

    public function getLastName() {
      return $this->lastname;
    }

    public function getEmail() {
      return $this->email;
    }

}