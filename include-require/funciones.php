<?php
function suma(int $var1, int $var2)
{return $var1+$var2;}

echo "El resultado de la funcion suma es: ". suma (4,5);
echo "<br>";
function resta(int $var1, int $var2)
{return $var1-$var2;}
echo "El resultado de la funcion resta es: ". resta (4,5);
echo "<br>";
function multi(int $var1, int $var2)
{return $var1*$var2;}
echo "El resultado de la funcion multiplicacion es: ". multi (4,5);
echo "<br>";
function division(int $var1, int $var2)
{return $var1/$var2;}
echo "El resultado de la funcion division es: ". division (10,2);
echo "<br>";
function descuento(int $var1, float $var2)
{return $var1+$var2*-$var2/100;}
//echo "El resultado de la funcion descuento es: ". descuento (1000*0.15);


?>