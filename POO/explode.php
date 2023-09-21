<?php
$numero = "uno dos tres cuatro cinco";
print_r("<pre>");
print_r(explode(" ", $numero));
print_r("</pre>");

$fecha = "21/09/2023";
print_r("<pre>");
print_r(explode("/", $fecha));
print_r("</pre>");

print_r("<pre>");
date_default_timezone_set('America/Bogota');
$hora= date("d-m-Y-h-i-s");

print_r(explode("-", $hora));
print_r("<pre");

print_r("<pre>");
date_default_timezone_set('Asia/Shanghai');
$horaChina= date("d-m-Y-h-i-s");

print_r(explode("-", $horaChina));
print_r("<pre");

print_r("<pre>");
date_default_timezone_set('America/Los_Angeles');
$horaLosAngeles= date("d-m-Y-h-i-s");

print_r(explode("-", $horaLosAngeles));
print_r("<pre");

print_r("<pre>");
date_default_timezone_set('Europe/Madrid');
$horaSevilla= date("d-m-Y-h-i-s");

print_r(explode("-", $horaSevilla));
print_r("<pre");

echo "<br><br><br><br>";


//ENCRIPTAR CONTRASEÑAS
$clave = "HolaMundo123";
echo hash("md5", $clave)."<br>";
// foreach(hash_algos()as $algortimos){
//     echo $algortimos." - ".hash($algortimos,$clave). "<br>";
// }
password_hash($clave, PASSWORD_BCRYPT, ["cost" =>11]);
?>