<?php
require("Require.php");

class Mesa {
    private $clientes = [];
    private $caja;

    public function __construct(CajaRegistradora $caja) {
        $this->caja = $caja;
    }

    public function agregarCliente(Cliente $cliente) {
        $this->clientes[] = $cliente;
    }

    public function cobrarPedidos() {
        foreach ($this->clientes as $cliente) {
            $this->caja->registrarVenta($cliente->getTotalPedido());
        }
    }
}