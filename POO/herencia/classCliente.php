<?php
include_once("classPersona.php");
class Cliente extends Persona {
    public $creditos;

    public function __construct($dpi, $name, $age, $credito)
    {  
       parent::__construct($dpi, $name, $age);
       $this->creditos = $credito; 
    }

    public function setCredito($credito) {
        $this->creditos = $credito;
    } 

    public function getCredito() {
        echo $this->creditos;
    }
}