<?php
$opcion= '10';

$accion= match ($opcion){
"1"=> 'la funcion elegida es la primera',
"2"=> 'la funcion elegida es la segunda',
"3"=> 'la funcion elegida es la tercera',
"4"=> 'la funcion elegida es la cuarta',
"5"=> 'la funcion elegida es la quinta',
default=>'invalido, funcion fuera del rango',
};

echo $accion;

?>