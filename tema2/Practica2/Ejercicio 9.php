<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Document</title>


</head>

<body>
    

<?php
$personajes = array(
    array(
        "Nombre" => "Lloyd Irving", "Foto" => "img/uno.jpg", "Caracteristicas" => array(
            "Género" => "Masculino",
            "Edad" => 17, "Estatura" => 1.73, "Peso"=> "58 Kg", "Clase"=> "Espadachín"), "Descripcion" => "El personaje central del Juego. Lloyd fue encontrado en el bosque con Noishe cuando era un infante. Ahora vive con su padre (enano) adoptivo.",
        "imagenes" => array("imagen1", "imagen2", "imagen3")
    ),

    array(
        "Nombre" => "Lloyd Irving", "Foto" => "img/uno.jpg", "Caracteristicas" => array(
            "Género" => "Masculino",
            "Edad" => 17, "Estatura" => 1.73, "Peso"=> "58 Kg", "Clase"=> "Espadachín"), "Descripcion" => "El personaje central del Juego. Lloyd fue encontrado en el bosque con Noishe cuando era un infante. Ahora vive con su padre (enano) adoptivo.",
        "imagenes" => array("imagen1", "imagen2", "imagen3")
    ),
);


foreach($personajes as $valor){
    echo $valor['Nombre'];
    echo "<br>";
};

echo "<br>";


echo "ARRAY ASOCIATIVO";
foreach($personajes as $clave => $valor){
   // echo $clave." ".$valor['Caracteristicas'];

   //esta parte se mete en el array asocitivo de caracteristicas en carac guarda "Genero" y el caracvalor"Masculino"
 
    foreach($valor['Caracteristicas'] as $carac => $caracvalor){
        echo  $carac." ".$caracvalor;
    }
  
    echo "<br>";
};


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
foreach(array_keys($personajes[0]) as $clave){
    echo $clave;
    echo "<br>";
}


$pruebecilla = array( "Nombre" => "Lloyd Irving", "Foto" => "loco", "Caracterista"=>"loco2");

foreach($pruebecilla as $clave => $valor){
    echo $clave;
}

$prueba = array(
    array(
        "id" => "1", "nombre" => "proyecto1"),
    array(
        "id" => "2", "nombre" => "proyecto2"),
    array(
        "id" => "3", "nombre" => "proyecto3"),
    array(
        "id" => "4", "nombre" => "proyecto4"),
);
    
    echo "-----------------------------------------------";
    $numID=2;

    foreach($prueba as $valor){
            if($valor['id']==$numID){
                unset($prueba[$numID]);
            }
    }
    

    echo "-----------------------------------------------";
    echo "-----------------------------------------------";
    echo "-----------------------------------------------";

    foreach($prueba as $clave){
            echo $clave['nombre'];
            echo "<br>";
        
    }

?>

</body>
</html>