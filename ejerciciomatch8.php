<?php

$palabra= 'estefania chilito';
$calcular= strlen($palabra);

$resultado= match (true){
$calcular <=9 => "la cadena es corta",
$calcular >=10=> "la cadena es larga",
};

echo $resultado;

?>