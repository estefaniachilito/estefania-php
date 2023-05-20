<?php
$numero='6' ;

$dia= match ($numero){
"1"=> 'dia lunes',
"2"=> 'dia martes',
"3"=> 'dia miercoles',
"4"=> 'dia jueves',
"5"=> 'dia viernes',
"6"=> 'dia sabado',
"7"=> 'dia domingo',
default => 'invalido, numero fuera del rango',
};
 echo $dia; 




?>