<?php

require("Require.php");
class Pedido {
    private $items = [];

    public function agregarItem(Item $item) {
        $this->items[] = $item;
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrecio();
        }
        return $total;
    }
    
}
