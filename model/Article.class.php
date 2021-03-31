<?php

class Article {
    private $id = "";
    private $title = "";
    private $articleContent = "";

    public function __construct($id="", $title,$articleContent) {
        $this->id = $id;
        $this->title = $title;
        $this->articleContent = $articleContent;
    }

    public function show() {
        echo "<br><hr>Données transmises :<br/>";
        echo "Prénom : <b>".$this->title."</b><br/>";
        echo "Nom : <b>".$this->articleContent."</b><br/>";
      }

    public function getId() {
      return $this->id;
    }

    public function getTitle() {
      return $this->title;
    }

    public function getContent() {
      return $this->articleContent;
    }

}
