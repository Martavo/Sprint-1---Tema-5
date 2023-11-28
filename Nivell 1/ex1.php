<?php
include_once "Animal.php";
include_once "Perro.php";
include_once "Gato.php";

//Instanciamos los objetos
$perro1 = new Perro ("Luna");
$gato1 = new Gato ("Taca");


//Llamamos a los metodos
echo $perro1->makeSound();

echo $gato1->makeSound(); 


?>