
<?php

// 12. Haz un diccionario de palabras español a inglés (20 palabras mínimo) con un array
// asociativo. Haz un programa que dada una palabra compruebe si está en el
// diccionario y si es así que muestre la traducción, y si no está que indique que no
// está en el diccionario. A continuación, muestra el diccionario ordenador en
// español

//arraykeyexist

echo"<br>";
echo"<br>";
echo"<strong>Ejercicio 12</strong>";
echo"<br>";

$diccionario = [ 
    "uno" => "one",
    "dos"=> "two",
    "tres"=> "three",
    "cuatro"=> "four",
    "cinco"=> "five",
    "seis"=> "six",
    "siete"=> "seven",
    "ocho"=> "eight",
    "nueve"=> "nine",
    "diez"=> "ten"
    ];
    
    $palabra="dos";
    if(array_key_exists($palabra,$diccionario)){
        echo $diccionario[$palabra];
    }else{
        echo"La palabra no esta en el diccionario";
    }
    

?>