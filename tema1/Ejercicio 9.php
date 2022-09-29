
<?php

// 9. Realiza un programa que pinte 5 círculos en horizontal cada uno de un color 
// diferente aleatorio.
// Puedes usar la función SVG circle para dibujar los círculos.


echo"<br>";
echo"<br>";
echo"<br>";
echo"<strong>Ejercicio 9</strong>";
echo"<br>";
echo"<br>";

for($i=0; $i<10; $i++){

    $color = 'rgb('.rand(1,255).','.rand(1,255).','.rand(1,255).')';
   echo'<svg height="100" width="100">
   <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="'.$color.'" />
    </svg>';
}


echo"<br>";
echo"<br>";


?>