
<?php

// 6. Dado un DNI guardado en una variable $dni, obtener la letra y mostrar por
// pantalla el DNI completo DNI-LETRA. El documento nacional de identidad DNI en
// España consta de un numero de 8 cifras y de una letra. La letra del DNI se obtiene
// a partir de los números como describen los pasos siguientes:
// - Calcular el resto de dividir el número de DNI entre 23
// - El número obtenido esta entre 0 y 22. Seleccionar una letra asociada a dicho
// número en la siguiente tabla:
// 0 -> T, 1 -> R, 2 -> W, 3 -> A, 4 -> G, 5 -> M, 6 -> Y, 7 -> F, 8 -> P, 9 -> D, 10 -> X, 11 ->
// B, 12 -> N, 13 -> J, 14 -> Z, 15 -> S, 16 -> Q, 17 -> V, 18 -> H, 19 -> L, 20 -> C, 21 -> K,
// 22 -> E


echo"<strong>Ejercicio 6</strong>";
echo"<br>";
$array=["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
$dni=77654128;

echo "la letra del DNI ". $dni . " es ". $array[($dni%23)];
echo"<br>";
echo"<br>";

?>