<?php
interface Shape{
    function getArea($witch,$height,$radius);
}
class Square implements Shape{
    //attributs
    private $width;
    private $height;

    //méthode
    function getArea($witch,$height,$radius){
        echo $height*$witch;
    }
    function __construct($Width,$Height){
        $this->width = $Width;
        $this->height = $Height;
    }
}
class Circle implements Shape{
    //attribut
    private $radius;

    //méthode
    function getArea($witch,$height,$radius){
        echo 2*M_PI*$radius;
    }
    function __construct($Radius){
        $this->radius = $Radius;
    }
}

$square = new Square(5,5);
$circle = new Circle(12);
$tableau = array(
  $circle,$square
);

foreach ($tableau as $value){
    echo get_class($value)." Area : ";
    echo $value->getArea(5,5,12).'<br>';
}
?>