<?php
    include 'formulaire.php';
$F = new formulaire("get","ex1TP7.php");
$F->ajouterzonetexte("Nom");
$F->ajouterzonetexte("Prenom");
$F->ajouterbouton();
$F->getform();
?>