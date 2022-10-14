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
    function pintarPorCategoria($productos, $categoria)
    {
        echo "<h3>" . strtoupper($categoria) . "</h3>";
        $cont = 0;
        foreach ($productos as $valor) { //PREGUNTAR

            if ($valor['categoria'] == $categoria) {

                if ($cont == 4)
                    break;
                $cont++;

                echo "<div class='card mb-5' style='width: 16rem;'>
                            <img src='" . $valor["foto"] . "' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                <h5 class='card-title'>" . $valor["titulo"] . "</h5>
                                <p class='card-text'>" . "ISBN : " . $valor['ISBN'] . "</p>
                                <p class='card-text'>" . $valor['descripcion'] . "</p>";
                echo "
                                <p class='card-text'><small class='text-dark'>" . $valor["precio"] . " €</small></p>
                                <a href='#' class='btn btn-info'>Comprar</a>
                            </div>
                        </div>";
            }
        }
    }


    //Productos de una tienda
    $libreria = array(
        array("ISBN" => 9788415821811, "titulo" => "Naruto 66", "descripcion" => "En la Villa Oculta de la Hoja, un chaval de lo más problemático que estudia en la escuela de ninjas, Naruto, se dedica a urdir gamberrada tras gamberrada.", "categoria" => "novela hitorica", "editorial" => "Planeta", "foto" => "img/naruto.jpg", "precio" => 7.20),
        array("ISBN" => 9788415821812, "titulo" => "Naruto 64", "descripcion" => "En la Villa Oculta de la Hoja, un chaval de lo más problemático que estudia en la escuela de ninjas, Naruto, se dedica a urdir gamberrada tras gamberrada.", "categoria" => "novela hitorica", "editorial" => "Planeta", "foto" => "img/naruto1.jpg", "precio" => 7.20),
        array("ISBN" => 9788415821813, "titulo" => "Naruto 63", "descripcion" => "En la Villa Oculta de la Hoja, un chaval de lo más problemático que estudia en la escuela de ninjas, Naruto, se dedica a urdir gamberrada tras gamberrada.", "categoria" => "novela hitorica", "editorial" => "Planeta", "foto" => "img/naruto2.jpg", "precio" => 7.20),
        array("ISBN" => 9788415821814, "titulo" => "Bleach 8", "descripcion" => "Ichigo Kurosaki no es un quinceañero normal y corriente... puede ver espiritus y tiene un contacto innato con el mas alla, al que sacara provecho tras conocer a un shinigami", "categoria" => "novela hitorica", "editorial" => "Glenat", "foto" => "img/bleach.jpg", "precio" => 7.20),
        array("ISBN" => 9788415821815, "titulo" => "Bleach 13", "descripcion" => "Ichigo Kurosaki no es un quinceañero normal y corriente... puede ver espiritus y tiene un contacto innato con el mas alla, al que sacara provecho tras conocer a un shinigami", "categoria" => "novela hitorica", "editorial" => "Glenat", "foto" => "img/bleach1.jpg", "precio" => 7.20),
        array("ISBN" => 9788415821816, "titulo" => "Bleach 16", "descripcion" => "Ichigo Kurosaki no es un quinceañero normal y corriente... puede ver espiritus y tiene un contacto innato con el mas alla, al que sacara provecho tras conocer a un shinigami", "categoria" => "novela negra", "editorial" => "Glenat", "foto" => "img/bleach2.jpg", "precio" => 7.20),
        array("ISBN" => 9788415821817, "titulo" => "Full Metal 9", "descripcion" => "Cuando tan solo eran unos niños, los hermanos Edward y Alphonse Elric usaron la alquimia para cometer un pecado capital: intentar la transmutación humana", "categoria" => "novela negra", "editorial" => "Norma Editorial", "foto" => "img/FullMetal3.jpg", "precio" => 7.20),
        array("ISBN" => 9788415821818, "titulo" => "Full Metal 18", "descripcion" => "Cuando tan solo eran unos niños, los hermanos Edward y Alphonse Elric usaron la alquimia para cometer un pecado capital: intentar la transmutación humana", "categoria" => "novela negra", "editorial" => "Norma Editorial", "foto" => "img/FullMetal1.jpg", "precio" => 7.20),
        array("ISBN" => 9788415821819, "titulo" => "Full Metal 12", "descripcion" => "Cuando tan solo eran unos niños, los hermanos Edward y Alphonse Elric usaron la alquimia para cometer un pecado capital: intentar la transmutación humana", "categoria" => "novela negra", "editorial" => "Norma Editorial", "foto" => "img/FullMetal2.jpg", "precio" => 7.20),
        array("ISBN" => 9788415821820, "titulo" => "Full Metal 6", "descripcion" => "Cuando tan solo eran unos niños, los hermanos Edward y Alphonse Elric usaron la alquimia para cometer un pecado capital: intentar la transmutación humana", "categoria" => "novela negra", "editorial" => "Norma Editorial", "foto" => "img/FullMetal4.jpg", "precio" => 7.20)
    );



    echo "<div class='container'>";
    echo "<div class='row'>";

    //Me quedo con los valores de la columna categoría, y los valores los meto en un array
    $categorias = array_column($libreria, "categoria");
    //Quito repetidos
    $categorias = array_unique($categorias);

    foreach ($categorias as $categoria)
        pintarPorCategoria($libreria, $categoria);




    echo "</div>";
    echo "</div>";


    ?>

</body>

</html>