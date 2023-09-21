<?php

// require_once("classCliente.php");
// require_once("./classPersona.php");

include_once("./classEmpleado.php");
include_once("./classCliente.php");


echo "<h1>Datos personales</h1>";

$objpersona = new Persona(1232121, "Diego", 17);
echo $objpersona->getDatosPersonales();


echo "<h1>Datos empleado</h1>";
$objempleado = new Empleado(23213131, "Daniel", 12, "Gerente");
echo $objempleado->getDatosPersonales();
$objempleado->getPuesto();


echo "<h1>Datos cliente</h1>";
$objcliente = new Cliente(65465445, "Danilo", 14, 1000000);
echo $objcliente->getDatosPersonales();
$objcliente->getCredito();