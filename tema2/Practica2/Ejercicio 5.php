<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// 5. Mejora el programa anterior de tal manera que el mensaje original lo divida primero
// en un array de palabras considerando el espacio en blanco como separador
// únicamente. A continuación, debe poner cada palabra del revés (hola ->aloh).
// Seguidamente encriptará cada palabra usando la función del ejercicio anterior.
// Finalmente devolverá un string con cada palabra encriptada añadiendo un espacio
// en blanco entre cada palabra. El desencriptador hará lo contrario (y no digo más).
// Muestra el programa funcionando encriptando y desencriptando.


function encriptar($mensaje,$clave){
    $cadena="";
    for($i=0; $i<strlen($mensaje); $i++){
      $cadena=$cadena.chr(ord($mensaje[$i])+$clave);
    }
    return $cadena;
}


function desencriptar($mensajeEn,$clave){
    $cadena="";
     for($i=0; $i<strlen($mensajeEn); $i++){
         $cadena=$cadena.chr(ord($mensajeEn[$i])-$clave);
     }
     return $cadena;
 }

function encriptarV2($mensajeEn, $clave) {
    $arrayEn = explode(" ",$mensajeEn);
    for($i = 0; $i<count($arrayEn); $i++){
        $arrayEn[$i] = encriptar(strrev($arrayEn[$i]),$clave);
    }

    return implode(" ", $arrayEn);
}

function desencriptarV2($mensajeEn, $clave) {
    $arrayEn = explode(" ",$mensajeEn);
    for($i = 0; $i<count($arrayEn); $i++){
        $arrayEn[$i] = desencriptar(strrev($arrayEn[$i]),$clave);
    }

    return implode(" ", $arrayEn);

}


//MENSAJE
$mensaje = "Moto papi";
//CONVERTIMOS EN ARRAY
echo "<br>";


//RECORREMOS Y ENCRIPTAMOS
echo encriptarV2($mensaje,4);
$mensajeEncriptado = encriptarV2($mensaje,4);
echo "<br>";

//DESENCRIPTAMOS
echo desencriptarV2($mensajeEncriptado,4);
echo "<br>";










?>

</body>
</html>