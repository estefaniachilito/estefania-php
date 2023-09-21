<?php

class Operaciones {
    public int $cantidadUno = 0;
    public int $cantidadDos = 0;
    public float $resultado = 0;

    public function __construct(int $valUno, int $valDos) {
        $this->cantidadUno = $valUno;
        $this->cantidadDos = $valDos;
    }

    public function suma() {
      $this->resultado = $this->cantidadUno + $this->cantidadDos;
      return $this->resultado;  
    }

    public function resta() {
        $this->resultado = $this->cantidadUno - $this->cantidadDos;
        return $this->resultado;
    }

    public function multiplicacion() {
        $this->resultado = $this->cantidadUno * $this->cantidadDos;
        return $this->resultado;
    }

    public function division() {
        $this->resultado = $this->cantidadUno / $this->cantidadDos;
        return $this->resultado;
    }

    public function potenciacion() {
        $this->resultado = $this->cantidadUno ** $this->cantidadDos;
        return $this->resultado;
    }

}