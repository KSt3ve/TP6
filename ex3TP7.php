<?php
trait Un{
    public function small(){
        echo '<small>'."texte en small".'</small>'.'<br>';
    }
    public function big(){
        echo '<h4>'."texte en h4".'</h4>';
    }
}
trait Deux{
    public function small(){
        echo '<i>'."texte en i".'</i>';
    }
    public function big(){
        echo '<h2>'."texte en h2".'</h2>';
    }
}

class Texte{
    use Un,Deux {
        Un::big insteadof Deux;
        Deux::small insteadof Un;
        Deux::big as gros;
        Un::small as petit;
    }
}

$test = new Texte();
$test->big();
$test->gros();
$test->petit();
$test->small();