<?php

include("./classMesa.php");


echo "<h1>Producto</h1>";

$producto = new Producto("Pequeña", 1200);

echo $producto->getInfoProducto();


echo "<h1>Mueble</h1>";

$mueble = new Mueble("Pequeña", 1200, 2, "En construcción", "Azul", "Madera");

echo $mueble->getInfoProducto();


echo "<h1>Mesa</h1>";

$mesa = new Mesa("Alta", 1000, 10, "Disponible", "Verde", "Madera", "Redonda", "1m");

echo $mesa->getInfoProducto();