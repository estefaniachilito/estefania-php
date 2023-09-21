<?php
include("./classPersona.php");
class Empleado extends Persona {
    public $puesto;

    public function __construct($dpi, $name, $age, $puesto)
    {  
       parent::__construct($dpi, $name, $age);
       $this->puesto= $puesto; 
    }

    public function setAsignarPuesto($puesto) {
        $this->puesto = $puesto;
    } 

    public function getPuesto() {
        echo $this->puesto;
    }
    
}