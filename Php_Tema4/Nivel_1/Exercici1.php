<?php
/*
Crea una clase Employee, define como atributos su nombre y sueldo. 
Definir un método initialize que reciba como parámetros el nombre y sueldo. 
Plantear un segundo método print que imprima el nombre y un mensaje si debe pagar 
o no impuestos (si el sueldo supera 6000, paga impuestos).
*/
class Employee{
    // Atributos
    private $nombre;
    private $sueldo;

    // Metodo para inicializar los campos 
    public function initialize($nombre, $sueldo){
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
    }

    //Metodo para imprimir la informacion del empleado
    public function print(){
        echo "Nombre: ". $this->nombre . "<br>";
        if($this->sueldo > 6000){
            echo "Debe pagar impuestos." ."<br><hr>";
        }else {
            echo "No debe pagar impuestos." . "<br><hr>";
        }
    }
}

// Instanciando o creacion de un objeto
$empleado1 = new Employee();
$empleado1 -> initialize("Elver Galarga", 8000);
$empleado1 -> print() ."<br>";

$empleado2 = new Employee();
$empleado2 -> initialize("Rosa Melano", 1200);
$empleado2 -> print() ."<br>";

?>