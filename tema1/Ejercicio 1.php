
<?php

// 1. Partiendo de 2 variables $primera y $segunda con valores aleatorios, hacer una
// página PHP que calcule y muestre por pantalla:
// - la diferencia de $primera menos $segunda
// - la división de $primera entre $segunda
// Añade un comentario que explique la función de generar números aleatorios.
echo"<strong>Ejercicio 1</strong>";
echo "<br>";
echo"La funcion que genera numeros aleatorios es rand()";
echo "<br>";

$primera=rand(1,10);
$segunda=rand(10,20);

echo "<br>";
echo"La diferencia entre ". $segunda. " y " . $primera . " es " . $segunda-$primera . "<br>";
echo"La division entre ". $segunda. " y " . $primera . " es " . $segunda/$primera . "<br>";
echo"La funciones que genera numeros aleatorio es rand(valor1,valor2)"."<br>";
echo "<br>";


?>