
<?php

// 13. Implementa una cola (FIFO: primero en entrar primero en salir) con php. Crear las
// funciones para añadir o eliminar n elementos en la cola, para vaciar la cola y para
// mostrar el contenido de la cola. Con esas funciones haz un programa en el que se
// pueda apreciar claramente el funcionamiento de la cola llamando a todas las
// funciones implementadas.


echo"<strong>Ejercicio 13</strong>";
echo"<br>";

$arrayFifo=[];

function anadir(&$array,$entrada){
    array_push($array,$entrada);
}
function eliminar(&$array,$cantidad){
    for($i=0; $i<$cantidad; $i++){
        array_shift($array);
    }
}

function mostrarArray($array){
    for($r=0; $r<count($array); $r++){
        echo $array[$r]. " ";
    }
}

anadir($arrayFifo,2);
anadir($arrayFifo,5);
anadir($arrayFifo,1);
anadir($arrayFifo,1);
mostrarArray($arrayFifo);
echo "<br>";
echo "<br>";
eliminar($arrayFifo,3);
mostrarArray($arrayFifo);
echo "<br>";
mostrarArray($arrayFifo);

?>