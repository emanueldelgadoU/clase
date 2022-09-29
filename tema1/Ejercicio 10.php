
<?php

// 10. Rellena un array de 10 números enteros, con los 10 primeros números naturales.
// Calcula la media de los que están en posiciones pares y muestra los impares por
// pantalla.

echo"<br>";
echo"<br>";
echo"<strong>Ejercicio 10</strong>";
echo"<br>";

$arrayNumerosNaturales=[1,2,3,4,5,6,7,8,9,10];
$media=0;
$contador=0;

echo "Los primeros numeros pares son ";

    for($i=0; $i<10; $i++){
        if($i%2!=0){
         echo $arrayNumerosNaturales[$i]." ";
        }else{
         $contador++;
         $media=$media+$arrayNumerosNaturales[$i];
            }
    }

    

echo"<br>";
echo "La media de los primero numeros impares es ".$media/$contador;
?>