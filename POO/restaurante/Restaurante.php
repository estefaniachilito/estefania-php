<?php
require("Require.php");

class Restaurante {
    private $mesas = [];
    private $caja;
    private $chef;

    public function __construct() {
        $this->caja = new CajaRegistradora();
        $this->chef = new Chef();
    }

    public function agregarMesa(Mesa $mesa) {
        $this->mesas[] = $mesa;
    }

    public function obtenerCaja() {
        return $this->caja;
    }

    public function obtenerChef() {
        return $this->chef;
    }
}
