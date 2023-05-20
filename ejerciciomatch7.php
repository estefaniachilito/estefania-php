<?php
$nota= 30;

$rango= match (true){
    $nota <= 20 => "esfuerzate mas",
    $nota <= 40 => "casi lo logras",
    $nota <= 60 => "no estuvo tan mal ",
    $nota <= 80 => "estuvo bien",
    $nota <= 89 => "muy bueno",
    $nota <= 100 => "excelente, felicitaciones",

};
echo $rango;
?>