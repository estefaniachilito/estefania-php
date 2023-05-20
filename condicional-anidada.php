<?php
$edad= 70;
$genero= "masculino";

if ($genero == "masculino"){

    if($edad >=60){
        echo "ya tiene la edad suficiente para pensionarse";
    }
    elseif ($edad < 60){
    echo "no tiene la edad suficiente para pensionarse";}
} 

elseif ($genero == "femenino"){
    if ($edad >= 54){
    echo "ya tiene la edad suficiente para pensionarse";
}elseif($edad < 60){
    echo "no tiene la edad suficiente para pensionarse";}

}


?>