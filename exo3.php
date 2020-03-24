<form method='post' action='exo3.php'>
    Nom : <input type="text" name="Nom"><br>
    Prénom : <input type="text" name="Prenom"><br>
    Mail : <input type="text" name="Mail"><br>
    Age : <select name="age" id="selectAge">
        <option value="">--Age--</option>
        <option value="0-20">0-20</option>
        <option value="21-40">21-40</option>
        <option value="41-60">41-60</option>
        <option value="61-80">61-80</option>
    </select><br>
    Monsieur : <input type="radio" name="genre" id="1" value="Monsieur">
    Madame : <input type="radio" name="genre" id="2" value="Madame"><br>
    <input type='submit' value='Envoyer'><br>
</form>

<?php
    class recup{
        //attribut
        private $Nom;
        private $Prenom;
        private $Mail;
        private $Age;
        private $Genre;

        //méthodes
        public function getNom(){
            if($_POST['Nom'] != ""){
                $this->Nom = $_POST['Nom'];
            }
        }
        public function getPrenom(){
            if($_POST['Prenom'] != ""){
                $this->Prenom = $_POST['Prenom'];
            }
        }
        public function getMail(){
            if($_POST['Mail'] != ""){
                $this->Mail = $_POST['Mail'];
            }
        }
        public function getAge(){
            $this->Age = $_POST['age'];
        }
        public function getGender(){
            $this->Genre = $_POST['genre'];
        }
        public function display(){

                echo "Votre nom est ".$this->Nom.'<br>';
                echo "Votre Prénom est ".$this->Prenom.'<br>';
                echo "Votre mail est ".$this->Mail.'<br>';
                echo "Vous avez ".$this->Age.'<br>';
                echo "Votre genre : ".$this->Genre.'<br>';

        }
        public function __construct(){
            $this->Nom = $_POST['Nom'];
            $this->Prenom = $_POST['Prenom'];
            $this->Mail = $_POST['Mail'];
            $this->Age = $_POST['age'];
            $this->Genre = $_POST['genre'];
        }
    }

$F = new recup();
$F->getNom();
$F->getPrenom();
$F->getMail();
$F->getAge();
$F->getGender();
$F->display();
?>