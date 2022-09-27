<?php

// 1. Partiendo de 2 variables $primera y $segunda con valores aleatorios, hacer una
// página PHP que calcule y muestre por pantalla:
// - la diferencia de $primera menos $segunda
// - la división de $primera entre $segunda
// Añade un comentario que explique la función de generar números aleatorios.
echo"<strong>Ejercicio 1</strong>";
echo "<br>";
$primera=rand(1,10);
$segunda=rand(10,20);

echo"La diferencia entre ". $segunda. " y " . $primera . " es " . $segunda-$primera . "<br>";
echo"La division entre ". $segunda. " y " . $primera . " es " . $segunda/$primera . "<br>";
echo"La funciones que genera numeros aleatorio es rand(valor1,valor2)"."<br>";
echo "<br>";
// 2. Tenemos dos cadenas $cadena1 con valor "hola a todo el mundo" y $cadena2 con
// valor "mi nombre es <nombre y apellidos del alumno/a>". Se pide:
// - $cadena3 contendrá el valor de la concatenación de $cadena1 y $cadena2,
// mostrar por pantalla el contenido de $cadena3
// - $cadena1 contendrá el resultado de la concatenación de sí misma con
// $cadena2, mostrar por pantalla el contenido de $cadena1
echo"<strong>Ejercicio 2</strong>";

$cadena1="hola a todo el mundo";
$cadena2=" mi nombre es Emanuel Delgado";

$cadena3=$cadena1.$cadena2;
$cadena1=$cadena1.$cadena2;

echo "<br>";
echo $cadena3."<br>";
echo $cadena1."<br>";
echo "<br>";

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



// 4. Tenemos los coeficientes de una ecuación de 2º grado (ax2 + bx + c = 0) en tres
// variables $a, $b y $c, muestra la ecuación y sus soluciones. Si no existen, debe
// indicarse por pantalla.

echo"<strong>Ejercicio 4</strong>";
echo "<br>";
$a=2;
$b=-2;
$c=-1;


$x=((-$b) + sqrt(pow($b, 2)) - (4 * $a * $c)) / (2 * $a);
$t=((-$b) + sqrt(pow($b, 2)) + (4 * $a * $c)) / (2 * $a);
echo $x;
echo "<br>";
echo $t;
echo "<br>";
echo "<br>";

// 5. Tenemos una variable $numero que tiene un número de 0 a 99. Mostrarlo escrito.
// Por ejemplo, para 56 mostrar: cincuenta y seis.
echo"<strong>Ejercicio 5</strong>";
echo "<br>";
$numero=rand(21,29);

function dimeNumero($num){

    $posicion2=$num;
    if($posicion2===1){
        return "uno";
    }else if($posicion2===2){
        return "dos";
    }else if($posicion2===3){
        return "tres";
    }else if($posicion2===4){
        return "cuatro";
    }else if($posicion2===5){
        return "cinco";
    }else if($posicion2===6){
        return "seis";
    }else if($posicion2===7){
        return "siete";
    }else if($posicion2===8){
        return "ocho";
    }else if($posicion2===9){
        return "nueve";
    }
    return;
}

if($numero>=21 && $numero<=29){
    echo "venti".dimeNumero($numero);

}


echo"<br>";
echo"<br>";



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


// 9. Realiza un programa que pinte 5 círculos en horizontal cada uno de un color 
// diferente aleatorio.
// Puedes usar la función SVG circle para dibujar los círculos.









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

// 11. Crea un array 7x7 con valores numéricos aleatorios excepto las diagonales que
// deben ser 1. A continuación muestra el array y después genera un vector que
// contenga la suma de cada fila y otro con la suma de cada columna.


echo"<br>";
echo"<br>";
echo"<strong>Ejercicio 11</strong>";
echo"<br>";


$array=[];

for($z=0; $z<7; $z++){
    for($k=0; $k<7;$k++){
        echo $array[$z][$k]=rand(0,9)."   ";
        if($z==$k){
            echo $array[$z][$k]="1   ";
        }
    }
    echo "<br>";
}



// 12. Haz un diccionario de palabras español a inglés (20 palabras mínimo) con un array
// asociativo. Haz un programa que dada una palabra compruebe si está en el
// diccionario y si es así que muestre la traducción, y si no está que indique que no
// está en el diccionario. A continuación, muestra el diccionario ordenador en
// español

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
    
    $palabra="uno";
    if(in_array($palabra,$diccionario)){
        echo $diccionario[$palabra];
    }else{
        echo"La palabra no esta en el diccionario";
    }
    
 
// 13. Implementa una cola (FIFO: primero en entrar primero en salir) con php. Crear las
// funciones para añadir o eliminar n elementos en la cola, para vaciar la cola y para
// mostrar el contenido de la cola. Con esas funciones haz un programa en el que se
// pueda apreciar claramente el funcionamiento de la cola llamando a todas las
// funciones implementadas.


echo"<br>";
echo"<br>";
echo"<strong>Ejercicio 13</strong>";
echo"<br>";

$arrayFifo=[];

function anadir($array,$entrada){
    array_push($array,$entrada);
}
function eliminar($array,$salida){
    array_shift($array,$salida);
}

function mostrarArray($array){
    for($r=0; $r<count($array); $r++){
        echo $array[$r]. " ";
    }
}

anadir($arrayFifo,2);
array_push($arrayFifo,1);
array_push($arrayFifo,1);
array_push($arrayFifo,1);
mostrarArray($arrayFifo);


// 14. Crea un array de notas de alumnos. Cada elemento del array debe contener las
// notas de un alumno, incluyendo nombre, materia y nota. Haz un programa con 10
// notas de alumnos. Luego debes mostrar las notas ordenadas en orden
// descendente por alumno, luego ordenadas por nombre, luego mostrar la nota
// media del curso, y el número de alumnos suspensos.



?>