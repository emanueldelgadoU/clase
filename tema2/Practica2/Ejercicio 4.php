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

// 4. Vamos a construir un encriptador y desencriptador de mensajes. Crearemos dos 
// funciones:
// - encriptar($mensaje,$clave) 
// o donde el primer argumento sea el mensaje a encriptar
// o el segundo argumento sea el número de letras a desplazar a la 
// derecha por cada letra, por ejemplo, la b con $clave=3 se 
// transformará en en la f.
// o La función devolverá el mensaje cifrado sustituyendo los espacios 
// en blanco del final y cada letra del mensaje por la correspondiente 
// según la clave.
// - desencriptar($mensaje,$clave) 
// o donde el primer argumento sea el mensaje a encriptar
// o el segundo argumento sea el número de letras a desplazar a la 
// izquierda por cada letra, por ejemplo, la f con $clave=3 se 
// transformará en en la b.
// o La función devolverá el mensaje cifrado sustituyendo cada letra del 
// mensaje por la correspondiente según la clave.
// Para mostrar que lo has hecho bien encripta un mensaje y muéstralo, desencríptalo y 
// muestra el mensaje que coincide con el original. Pista: utilizar las funciones PHP para 
// pasar un carácter a su correspondiente dígito ASCII y al revés.


$mensaje = "motopapi";


function encriptar($mensaje,$clave){
    $cadena="";
    for($i=0; $i<strlen($mensaje); $i++){
      $cadena=$cadena.chr(ord($mensaje[$i])+$clave);
    }
    echo $cadena;
    return $cadena;
}


function desencriptar($mensajeEn,$clave){
    $cadena="";
     for($i=0; $i<strlen($mensajeEn); $i++){
         $cadena=$cadena.chr(ord($mensajeEn[$i])-$clave);
     }
     echo $cadena;
 }

$mensajeEn = encriptar($mensaje,4);
echo "<br>";
desencriptar($mensajeEn,4);

?>

</body>
</html>