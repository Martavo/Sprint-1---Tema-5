<?php
 abstract class Shape{
    //Atributos
    protected $alto;
    protected $ancho;


    //Constructor
    public function __construct($alto, $ancho) {
        $this->alto = $alto;
        $this->ancho = $ancho;
    }

    //Metodo
    abstract public function calculcarArea();

 }

?>