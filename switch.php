<?php

$dia= 3;
switch($dia){
case 1: 
    echo "Has seleccionado el dia lunes";
break;
    case 2: 
        echo "Has seleccionado el dia martes";
    break;
    case 3: 
        echo "Has seleccionado el dia miercoles";
    break;
    case 4: 
        echo "Has seleccionado el dia jueves";
    break;
    case 5: 
        echo "Has seleccionado el dia viernes";
    break;
    case 6: 
        echo "Has seleccionado el dia sabado";
    break;
    case 7: 
        echo "Has seleccionado el dia domingo";
    break;

    default:
    echo "invalido, valor fuera del rango";
    break;
}
?>