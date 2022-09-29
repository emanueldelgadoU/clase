
<?php

// 8. Crea un generador aleatorio de apuesta de la Lotería Primitiva. Cada vez que
// recargues la página aparecerá una combinación diferente.


echo"<br>";
echo"<br>";
echo"<strong>Ejercicio 8</strong>";
echo"<br>";
$arrayLoteria=[];
echo "El numero de la loteria generado aleatorio sin nuneros repetidos es ===>  ";

        do{
            $aleatorio=rand(0,9);
            if(in_array($aleatorio,$arrayLoteria)==false){
                array_push($arrayLoteria,$aleatorio);
                echo $aleatorio;
                //NO DEJA IMPRIMIR EL ARRAY
            }
        } while(count($arrayLoteria)<6);


?>