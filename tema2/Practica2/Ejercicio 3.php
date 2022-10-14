<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// 3. Crear un array llamado $word_list_en con 50 palabras en inglés. Crea otro array 
// llamado $word_list_es con las mismas 50 palabras en el mismo orden, pero en 
// español. El ejercicio consiste en hacer un traductor literal de español a inglés o 
// viceversa, debe recorrer una cadena de texto y devolverla en el idioma traduciendo 
// una por una las palabras (se supone que están en la misma posición en los 
// arrays).


$word_list_en=["one","two","three","four","five","six","seven","eigth","nine","ten"];

$word_list_es=["uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez"];

$palarba="seis";
$posicion;

for($i=0; $i<count($word_list_en); $i++){
    if($word_list_en[$i]==$palarba){
        echo $word_list_es[$i];
    }
}

for($i=0; $i<count($word_list_es); $i++){
    if($word_list_es[$i]==$palarba){
        echo $word_list_en[$i];
    }
}



?>

</body>
</html>