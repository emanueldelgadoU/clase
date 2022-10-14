
<?php

// 2. Tenemos dos cadenas $cadena1 con valor "hola a todo el mundo" y $cadena2 con
// valor "mi nombre es <nombre y apellidos del alumno/a>". Se pide:
// - $cadena3 contendrá el valor de la concatenación de $cadena1 y $cadena2,
// mostrar por pantalla el contenido de $cadena3
// - $cadena1 contendrá el resultado de la concatenación de sí misma con
// $cadena2, mostrar por pantalla el contenido de $cadena1
echo"<strong>Ejercicio 2</strong>";

$cadena1="hola a todo el mundo";
$cadena2=" mi nombre es Emanuel Delgado";

$cadena3=$cadena1.$cadena2;
$cadena1=$cadena1.$cadena2;

echo "<br>";
echo $cadena3."<br>";
echo $cadena1."<br>";
echo "<br>";


?>