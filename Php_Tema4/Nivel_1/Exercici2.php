<?php
/*
Escribe un programa que defina una clase Shape con un constructor que reciba 
como parámetros el ancho y alto. Define dos subclases; Triángulo y Rectángulo que hereden de Shape 
y que calculen respectivamente el área de la forma area().
*/

class Shape {
    // Atributos
    public $ancho;
    public $alto;

    // Constructor
    public function __construct($ancho, $alto){
        $this -> ancho = $ancho;
        $this -> alto = $alto;
    }
}

// Clase Triangulo
class Triangulo extends Shape {
    // Método para calcular el área del triángulo
    public function area(){
        return ($this -> ancho * $this -> alto) / 2;
    }
}

// Clase Rectángulo
class Rectangulo extends Shape {
    // Método para calcular el área del rectángulo
    public function area(){
        return $this -> ancho * $this -> alto;
    }
}

// Instanciando los clases y atributos
$triangulo = new Triangulo(10, 5);
 echo "Área del triángulo: " .$triangulo->area() ."<br><hr>";

$rectangulo = new Rectangulo(10, 5);
 echo "Area del rectangulo: " .$rectangulo->area() ."<br><hr>";

?>