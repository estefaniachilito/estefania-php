<?php

include_once("./class.operaciones.php");

$objCaculadora = new Operaciones(6, 2);

echo $objCaculadora->suma();
echo "<br>";
echo $objCaculadora->resta();
echo "<br>";
echo $objCaculadora->multiplicacion();
echo "<br>";
echo $objCaculadora->division();
echo "<br>";
echo $objCaculadora->potenciacion();