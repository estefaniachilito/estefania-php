<?php
//aqui ponemos el numero de mensaje que deseamos
$mensaje= 3;
$resultado = match (true){
    $mensaje == 1 => "selecciono el mensaje numero 1",
    $mensaje == 2 =>"selecciono el mensaje numero 2",
    $mensaje == 3 =>"selecciono el mensaje numero 3",
    default => 'invalido, numero fuera del rango',
};
echo $resultado;

?>