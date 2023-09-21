<?php
class Item {
    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getItem() {
        return "- Nombre: ".$this->nombre." Precio: ".$this->precio."<br>";
    }
}