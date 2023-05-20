<?php

$letra = 'x';
$vocales = match ($letra){
     "a"=> 'es una vocal',
     "e"=> 'es una vocal',
     "i"=> 'es una vocal',
     "o"=> 'es una vocal',
     "u"=> 'es una vocal',

     "b"=> 'es una consonante',
     "c"=> 'es una consonante',
     "d"=> 'es una consonante',
     "f"=> 'es una consonante',
     default => 'invalido, letra fuera del rango',
};

echo $vocales;

?>