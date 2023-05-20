<?php

$cantidad=2;
$descuento = -20000*20/100+20000;
$descuento2= 20000*10/100+20000;
$valor= 20000;
$resu = ($cantidad >= 3) ? $cantidad * $descuento : $cantidad  * $descuento2;

echo $resu;

?>