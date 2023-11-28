<?php

class Rectangulo extends Shape{
        
    public function calculcarArea(){
        return "El area del rectangulo es: " . $this -> ancho * $this -> alto;
    }

   
}



?>