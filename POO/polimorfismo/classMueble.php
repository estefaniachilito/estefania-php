<?php
include("./classProducto.php");
class Mueble extends Producto {
    public $color;
    public $material;

    public function __construct($descripcion, $precio, $stock_minimo, $status, $color, $material) 
    {
        parent::__construct($descripcion, $precio, $stock_minimo, $status);
        $this->color = $color;
        $this->material = $material;
    }

    public function getInfoProducto() {
        $datos = $this->descripcion."<br>".$this->precio."<br>".$this->stock_minimo.
        "<br>".$this->status."<br>".$this->color."<br>".$this->material;
        return $datos;
    }
}