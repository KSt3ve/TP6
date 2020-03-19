<?php
echo "<h1> TP5 </h1>";
echo "<hr>";

echo "<h2> Exercice1 </h2>";

class Equipe {
    //Attribut
    const NBEQUIPE = "Nombre d'équipe :";
    private $name;
    private $nbTitre;
    static $nbEquipe=0;
    //Méthode
    public function GetName(){return $this->name;}
    public function GetnbTitre(){return $this->nbTitre;}
    public function SetName($name){$this->name = $name;}
    public function SetnbTitre($nbTitre){$this->nbTitre = $nbTitre;}

    function display(){
        echo "L'équipe ".$this->name." a ".$this->nbTitre." titre".'<br>';
    }
    function __construct($name, $nbTitre){
        $this->name = $name;
        $this->nbTitre = $nbTitre;
        self::$nbEquipe++;
    }
    function __destruct(){
        echo "Destroyed".'<br>';
    }
    static function displaynbEquipe(){
        echo self::NBEQUIPE." ".self::$nbEquipe.'<br>';
    }
}
$E1 = new Equipe("Paris",0);
$E1->display();
$E2 = new Equipe("Nantes", 10);
$E2->display();
$E3 = new Equipe("Loli's Army",18);
$E3->display();
$E3->displaynbEquipe();

?>