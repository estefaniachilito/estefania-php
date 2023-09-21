<?php

class Persona {
    public $DPI = 0;
    public $nombre = "";
    public $edad = 0;

    public function __construct(int $dpi, string $name, int $age)
    {
        $this->DPI = $dpi;
        $this->nombre = $name;
        $this->edad = $age;
    }

    public function getDatosPersonales() {
        $resultado = $this->DPI."<br>".$this->nombre."<br>".$this->edad."<br>";
        return $resultado;
    }
}