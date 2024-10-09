<?php
include_once("shapeInterface.php");

//Área de un cuadrado = Lado x Lado

class Square implements Shape
{
    private $sideLenght;
    
    public function __construct($a)
    {
        $this->sideLenght = $a;
    }

    public function calculateArea(): float
    {
    return $this->sideLenght * $this->sideLenght;
}
}

?>