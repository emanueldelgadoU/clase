
<?php

// 5. Tenemos una variable $numero que tiene un número de 0 a 99. Mostrarlo escrito.
// Por ejemplo, para 56 mostrar: cincuenta y seis.
echo"<strong>Ejercicio 5</strong>";
echo "<br>";


function dimeNumero($numero){

    $posicion2=substr($numero,1);
    if($posicion2>=1 && $posicion2<=1.9){
        return "uno";
    }else if($posicion2>=2 && $posicion2<=2.9){
        return "dos";
    }else if($posicion2>=3 && $posicion2<=3.9){
        return "tres";
    }else if($posicion2>=4 && $posicion2<=4.9){
        return "cuatro";
    }else if($posicion2>=5 && $posicion2<=5.9){
        return "cinco";
    }else if($posicion2>=6 && $posicion2<=6.9){
        return "seis";
    }else if($posicion2>=7 && $posicion2<=7.9){
        return "siete";
    }else if($posicion2>=8 && $posicion2<=8.9){
        return "ocho";
    }else if($posicion2>=9 && $posicion2<=9.9){
        return "nueve";
    }
    return;
}


$numero=rand(21,29);

if($numero>=21 && $numero<=29){
	echo "El numero es";
    echo " venti y ".dimeNumero($numero);
}



echo"<br>";
echo"<br>";



?>