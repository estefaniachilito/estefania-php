<?php

require_once('./class.usuario2.php');

$objUsuario = new Usuario("Diego Duran", "diego@gmail.com", "usuario");

echo $objUsuario->getMail()."<br>";
echo $objUsuario->getName()."<br>";
echo $objUsuario->getTipo()."<br>";

echo Usuario::$strEstado."<br>";

echo $objUsuario->getPerfil()."<br>";

$objUsuario2 = new Usuario("Fernanda", "fernanda@gmail.com", "usuario");

echo $objUsuario2->getPerfil()."<br>";
$objUsuario2->setCambiarclave("Perro");
echo "Se ha cambiado la clave \n \n <br>";
echo $objUsuario2->getPerfil()."<br>";