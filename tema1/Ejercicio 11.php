
<?php

// 11. Crea un array 7x7 con valores numéricos aleatorios excepto las diagonales que
// deben ser 1. A continuación muestra el array y después genera un vector que
// contenga la suma de cada fila y otro con la suma de cada columna.


$numeros = [];
for($i=0; $i<7; $i++) {
    for($j=0; $j<7; $j++) {
        if ($i == $j) {
            $numeros[$i][$j] = 1;
        } else {
            $numeros[$i][$j] = rand(1,9);
        }
    }
}

//Calcular suma de las filas
$sumaFila = [];
for($i=0; $i<7; $i++) {
    /*
    $sumaF = 0;
    for($j=0; $j<7; $j++) {
        $sumaF += $numeros[$i][$j];
    }
    $sumaFila[$i] = $sumaF;
    */
    $sumaFila[$i] = array_sum($numeros[$i]);
}
var_dump($sumaFila);
echo "<br>";

//Calcular suma de las columnas
$sumaColumna = [];
for($j=0; $j<7; $j++) {
    $sumaColumna[$j] = array_sum(array_column($numeros, $j));
}
var_dump($sumaColumna);
echo "<br>";



for($i=0; $i<7; $i++) {
    for($j=0; $j<7; $j++) {
        echo $numeros[$i][$j] . " ";
    }
    echo "<br>";
}


?>