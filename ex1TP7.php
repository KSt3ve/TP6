<?php
include 'testformulaire.php';
final class form2 extends formulaire{
    //méthodes
    final public function boutonradio($text){
        echo "$text : <input type=\"radio\" name=\"$text\"><br>";
    }
    public function boutoncocher($text){
        echo "$text : <input type=\"checkbox\" name=\"$text\"><br>";
    }
    public function __construct($methode, $nomfichier)
    {
        parent::__construct($methode, $nomfichier);
    }
}

$F = new form2("get","ex1TP7.php");
$F->boutonradio("Homme");
$F->boutonradio("Femme");
$F->boutoncocher("Tennis");
$F->boutoncocher("Equitation");
$F->getform();