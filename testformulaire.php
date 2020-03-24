<?php
    include 'formulaire.php';
$F = new formulaire("get","testformulaire.php");
$F->ajouterzonetexte("Nom");
$F->ajouterzonetexte("Prenom");
$F->ajouterbouton();
$F->getform();
?>