
<?php

// 3. Tenemos el radio de un circulo almacenado en la variable $radio obtenida de
// forma aleatoria, calcular y mostrar por pantalla el volumen de una esfera de ese
// radio.
echo"<strong>Ejercicio 3</strong>";
echo "<br>";
$radioCirculo=rand(5,15);

$volumen=(4/3)*pi()*pow($radioCirculo,3);
echo "El volumen de una esfera con un radio de ". $radioCirculo . " es " . $volumen;
echo "<br>";
echo "<br>";



?>