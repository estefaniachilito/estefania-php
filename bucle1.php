<?php

$numeroDatos =intval(readline(prompt: "ingrese la cantidad de datos a promediar \n"));
$datos = [4];
for($e =1; $e < $numeroDatos; $e++){
$datos[$e-1] = floatval(readline(prompt: "ingrese el dato \n"));
}

$suma = 0;
for ($e=1; $e < $numeroDatos; $e ++){
    $suma += $datos [$e-1];
}
?>