<?php

require("Require.php");

class Cliente {
    private $pedido;

    public function __construct() {
        $this->pedido = new Pedido();
    }

    public function realizarPedido(Item $item) {
        $this->pedido->agregarItem($item);
    }

    public function getTotalPedido() {
        return $this->pedido->calcularTotal();
    }

    public function getPedido() {
        return $this->pedido;
    }
}