
<?php

// 4. Tenemos los coeficientes de una ecuación de 2º grado (ax2 + bx + c = 0) en tres
// variables $a, $b y $c, muestra la ecuación y sus soluciones. Si no existen, debe
// indicarse por pantalla.

echo"<strong>Ejercicio 4</strong>";
echo "<br>";
$a=2;
$b=-2;
$c=-1;


$x=((-$b) + sqrt(pow($b, 2)) + (-4 * $a * $c)) / (2 * $a);
$t=((-$b) - sqrt(pow($b, 2)) + (-4 * $a * $c)) / (2 * $a);
echo $x;
echo "<br>";
echo $t;
echo "<br>";
echo "<br>";

?>