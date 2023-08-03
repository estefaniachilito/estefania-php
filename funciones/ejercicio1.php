<form method="post" action="#">
    <h3>Ingrese la palabra palindroma</h3>
    <input type="text" placeholder="Ingrese" name="palabra">
    <button type="submit">Enviar</button>
</form>
<?php

// Crea una función llamada "esPalindromo" que reciba una cadena de texto como parámetro y devuelva true si la cadena es un palíndromo y false si no lo es. Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha y de derecha a izquierda, ignorando los espacios y signos de puntuación.
// str_replace = se utiliza para reemplazar caracteres dentro de una cadena de caracteres.
// strrev = es una función que se utiliza para invertir una cadena de caracteres.

$palabra = $_POST['palabra'];
function esoPalindromo($palabra){

$fraseInvertida = str_replace(" ","", strrev($palabra));

if (str_replace(" ","",$palabra) == $fraseInvertida) {
    $frase =  "es un palindromo";
}else {
    $frase =  "NO es un palindromo";
}
return $frase;
}
  echo esoPalindromo($palabra);


?>