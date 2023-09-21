<?php 

require("Require.php");


$restaurante = new Restaurante();

$item1 = new Item("Pizza", 10.0);
$item2 = new Item("Ensalada", 7.0);
$menu = new Menu();
$menu->agregarItem($item1);
$menu->agregarItem($item2);
echo "<h3>Menu</h3>";
foreach ($menu->getItems() as $item) {
    echo $item->getItem();
}

$cliente1 = new Cliente();
$cliente1->realizarPedido($item1);
$cliente1->realizarPedido($item2);
echo "<h3>Resumen del pedido del cliente 1</h3>";
echo $cliente1->getTotalPedido()."<br>";

$cliente2 = new Cliente();
$cliente2->realizarPedido($item2);
echo "<h3>Resumen del pedido del cliente 2</h3>";
echo $cliente2->getTotalPedido()."<br>";

$mesa1 = new Mesa($restaurante->obtenerCaja());
$mesa1->agregarCliente($cliente1);
$mesa1->agregarCliente($cliente2);

$restaurante->agregarMesa($mesa1);
$restaurante->obtenerChef()->prepararPedido($cliente1->getPedido());
$restaurante->obtenerChef()->prepararPedido($cliente2->getPedido());

$mesa1->cobrarPedidos();

echo "Ventas Totales: " . $restaurante->obtenerCaja()->getVentasTotales() . "\n";

?>
