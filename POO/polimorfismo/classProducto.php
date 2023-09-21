<?php

class Producto {
    public $descripcion;
    public $precio;
    protected $stock_minimo = 5;
    protected $status = "Activo";

    public function __construct($descripcion, $precio)
    {  
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }

    public function getInfoProducto() {
        $datos = $this->descripcion."<br>".$this->precio."<br>".$this->stock_minimo."<br>".$this->status;
        return $datos;
    }
}