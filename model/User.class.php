<?php


class User {
  private $id = "";
  private $userFirstName = "";
  private $userLastName = "";
  private $userEmail = "";

  public function __construct($id = "",$userFirstName, $userLastName, $userEmail) {
    $this->id = $id;
    $this->userFirstName = $userFirstName;
    $this->userLastName = $userLastName;
    $this->userEmail = $userEmail;
  }

  public function show() {
    echo "<br><hr>Données transmises :<br/>";
    echo "Prénom : <b>".$this->userFirstName."</b><br/>";
    echo "Nom : <b>".$this->userLastName."</b><br/>";
    echo "Email : <b>".$this->userEmail."</b><br/>";
  }

  public function getId() {
    return $this->id;
  }

  public function getFirstName() {
    return $this->userFirstName;
  }

  public function getLastName() {
    return $this->userLastName;
  }

  public function getEmail() {
    return $this->userEmail;
  }

}
