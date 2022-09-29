
<?php

// 7. Hacer una página PHP que para un array de 5 elementos muestre por pantalla la
// tabla de multiplicar de dichos elementos (del 1 al 10) (for o while)


echo"<strong>Ejercicio 7</strong>";

    $tabla=[2,3,4,5,6];
    echo"<br>";
    echo "Mostraremos las tablas del siguente array";
    echo"<br>";

    for($i=0; $i<=count($tabla)-1; $i++){
        echo"<br>";
        for($j=1; $j<=10; $j++){
            echo $tabla[$i]." * ".$j." = ".($tabla[$i]*$j);
            echo"<br>";
        }
    }



?>