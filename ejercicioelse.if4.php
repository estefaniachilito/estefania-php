<?php

$edad = 19;
$licencia = "si";
//Sí la edad es mayor o igual a 18 el echo dirá apto para conducir
if ($edad >= 18 ){
    echo " apto para conducir ";
    echo "<br>";
// si la edad es mayor a dieciocho pero no tiene licencia el echo dirá Debes obtener una licencia de conducir primero
    if ($licencia == "No") {
        echo "Debes obtener una licencia de conducir primero";
    } 
}
//si la edad es menor a 18 el echo dirá No puedes conducir
elseif($edad < 18) {
    echo "No puedes conducir";
    }


    ?>