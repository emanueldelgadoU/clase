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

// 1. Crea un array de nombres de clientes, que contengan nombre de la empresa de al
// menos 5 clientes.
// [“Cosentino”, “Garciden”, “Deretil”, “Makito”, “Globomatik”]
// A continuación, crea una función llamada:
// convierteClientes($nombres, $opcion)
// donde el primer parámetro sea el array con los nombres de los clientes, y el
// segundo parámetro pueden ser tres opciones:
// - “L”: transforma todos los strings del array $nombres a minúsculas y lo
// devuelve.
// - “U”: transforma todos los strings del array $nombres a mayúsculas y lo
// devuelve.
// - “M”: transforma todos los strings del array $nombres de modo que la
// primera letra de cada nombre de empresa sea mayúscula y el resto
// minúscula. Lo devuelve.
// Muestra un ejemplo de la función con cada una de las diferentes opciones.

$cliente=["Cosentino", "Garciden", "Deretil", "Makito", "Globomatik"];

function convierteClientes(&$cliente, $opcion){

    if($opcion=="L"){
        foreach ($cliente as $valor) {
            echo strtolower($valor)."<br>";
        }
    }elseif($opcion=="U"){
        foreach ($cliente as $valor) {
            echo  strtoupper($valor)."<br>";
        }
    }elseif($opcion=="M"){
        foreach ($cliente as $valor) {
            echo  ucfirst($valor)."<br>";
        }
    }
}

$variable="U";
convierteClientes($cliente,$variable);
echo "<br>";

$variable="L";
convierteClientes($cliente,$variable);
echo "<br>";

$variable="M";
convierteClientes($cliente,$variable);



?>

</body>
</html>