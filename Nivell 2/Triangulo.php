<?php

class Triangulo extends Shape{
        
    public function calculcarArea(){
        return "El area del triangulo es: " . $this -> ancho * $this -> alto * 0.5;
    }

   
}



?>