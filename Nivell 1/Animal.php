<?php
 abstract class Animal{
    //Atributos
    protected $nombre;


    //Constructor
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    //Metodo
    abstract public function makeSound(){
    }

 }

?>