<?php

$color = 'verde';

$accion = match ($color){
'rojo'=> "el color es calido",

'verde'=> "el color es frio",

'azul'=> "el color es frio",

default => 'invalido, color fuera del rango',
};

echo $accion; 

?>