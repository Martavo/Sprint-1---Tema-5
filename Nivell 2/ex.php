<?php
include_once "Shape.php";
include_once "Triangulo.php";
include_once "Rectangulo.php";

$rectangulo = new Rectangulo("4", "4");
echo $rectangulo -> calculcarArea();
echo "<br>";
$triangulo = new Triangulo("4", "4");
echo $triangulo -> calculcarArea();


?>