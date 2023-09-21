<?php 
require_once("classMueble.php");
class Mesa extends Mueble {
    public $forma;
    public $size;

    public function __construct($descripcion, $precio, $stock_minimo, $status, $color, $material, $forma, $size) 
    {
        parent::__construct($descripcion, $precio, $stock_minimo, $status, $color, $material);
        $this->forma = $forma;
        $this->size = $size;
    }

    public function getInfoProducto() {
        $datos = $this->descripcion."<br>".$this->precio."<br>".$this->stock_minimo.
        "<br>".$this->status."<br>".$this->color."<br>".$this->material."<br>".$this->forma."<br>".$this->size;
        return $datos;
    }
}