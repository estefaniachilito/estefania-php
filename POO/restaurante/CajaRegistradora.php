<?php

class CajaRegistradora {
    private $ventasTotales = 0;

    public function registrarVenta($monto) {
        $this->ventasTotales += $monto;
    }

    public function getVentasTotales() {
        return $this->ventasTotales;
    }
}