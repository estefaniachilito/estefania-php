<?php
require("Require.php");
class Menu {
    public $items = [];

    public function agregarItem(Item $item) {
        $this->items[] = $item;
    }

    public function getItems() {
        return $this->items;
    }
}