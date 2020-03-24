<?php

class formulaire{
//méthodes
 public function ajouterzonetexte($text){
    echo "$text : <input type=\"text\" name=\"$text\"><br>";
 }
 public function ajouterbouton(){
    echo "<input type='submit' value='Envoyer'>";
 }
 public function getform(){
     echo "</form>";
 }

 //constructeur
  public function __construct($methode, $nomfichier) {
        echo "<form method='".$methode."' action='".$nomfichier."'>";
    }
}