<?php

$user=$_POST['nombre'];
$clave=$_POST['clave'];

//usuario Estefania -  clave= 12345

// $clave_procesada=password_hash($clave, PASSWORD_BCRYPT, ["cost"=>11]);
$userDefault = "Estefania";
$q="827ccb0eea8a706c4c34a16891f84e7b";

// echo hash("md5", $clave);

if($q == md5($clave) && $user == $userDefault){
    echo "<br> Bienvenido";
} else {
    echo "Datos incorrectos";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="#" method="post">
<label for="">Usuario</label>
<input type="text" name="nombre" id="">
<label for="">Contraseña</label>
<input type="password" name="clave" id="">
<input type="submit" value="enviar">
    </form>
</body>
</html>