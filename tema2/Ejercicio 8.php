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
                "Género: Masculino",
                "Edad: 17", "Estatura: 1.73", "Peso: 58 Kg", "Clase: Espadachín", "Raza: Humano", "Cabello: Castaño/Corto", "Arma: Dos Espadas de un Filo", "Ocupación: Alumno",
            ), "Descripcion" => "El personaje central del Juego. Lloyd fue encontrado en el bosque con Noishe cuando era un infante. Ahora vive con su padre (enano) adoptivo.",
            "imagenes" => array("imagen1", "imagen2", "imagen3")
        ),

        array(
            "Nombre" => "Colette Brunel", "Foto" => "img/dos.jpg", "Caracteristicas" => array("Género: Femenino", "Edad: 16", "Estatura: 1.57", "Peso: 44 Kg", "Clase: Elegida", "Raza: Humano", "Cabello: Rubio Platino/Largo", "Arma: Chakram", "Ocupación: Alumno/Elegida"), "Descripcion" => "Colette es la heroína del Juego y una amiga de la infancia de Lloyd. Aunque normalmente algo descuidada y despreocupada, tiene una determinación fuerte y un sentido de responsabilidad escondido debajo de su apariencia encantadora. Ella carga con el peso del mundo en sus hombros.",
            "imagenes" => array("imagen1", "imagen2", "imagen3")
        ),

        array(
            "Nombre" => "Genis Sage", "Foto" => "img/tres.jpg", "Caracteristicas" => array(
                "Género: Masculino", "Edad: 12", "Estatura: 1.42", "Peso: 29 Kg", "Clase: Hechizero", "Raza: Elfo", "Cabello: Plateado", "Arma: Kendama",
                "Ocupación: Alumno"
            ), "Descripcion" => "Este Joven niño es uno de los más cercanos amigos de Lloyd. Es un niño prodigio: no solamente es el alumno más listo de la aldea, sino que también es un mago talentoso. Gracias a estas habilidades, su autoestima es alta, a tal punto que cuida a los demás.",
            "imagenes" => array("imagen1", "imagen2", "imagen3")
        ),

        array("Nombre" => "Raine Sage", "Foto" => "img/cuatro.jpg", "Caracteristicas" => array(
            "Género: Femenino", "Edad: 23", "Estatura: 1.65", "Peso: 29 Kg", "Clase: Hechizera", "Raza: Elfo", "Cabello: Plateado", "Arma: Báculo",
            "Ocupación: Maestra"
        ), "Descripcion" => "Raine es la maestra de la escuela a la que Lloyd, Colette, y Genis acuden. También es la hermana mayor de Genis. Se le pide que se una a Colette en su búsqueda por su conocimiento de arqueología y las artes mágicas. Aunque normalmente buena onda, su pasión por la arqueología a veces la satura.", "imagenes" => array("imagen1", "imagen2", "imagen3")),

        array("Nombre" => "Kratos Aurion", "Foto" => "img/cinco.jpg", "Caracteristicas" => array(
            "Género: Masculino", "Edad: 28", "Estatura: 1.85", "Peso: 78 Kg", "Clase: Hechizero/Espadachín", "Raza: Humano", "Cabello: Cafe Oscuro", "Arma: Báculo",
            "Ocupación: Mercenario"
        ), "Descripcion" => "Kratos es un mercenario contratado para acompañar a la escogida en su búsqueda para la regeneración. Es un talentoso espadachín; no se compara con el nivel bajo de Lloyd. Su acercamiento lógico para resolver situaciones irritan a Lloyd, quien intenta manejar las cosas de una manera completamente opuesta.", "imagenes" => array("imagen1", "imagen2", "imagen3")),

        array("Nombre" => "Zelos Wilder", "Foto" => "img/seis.jpg", "Caracteristicas" => array(
            "Género Masculino",
            "Edad: 22", "Estatura: 1.78", "Peso: 68 Kg", "Clase: Hechizero/Espadachín", "Raza: Humano", "Cabello: Rojo", "Arma: Espada de Dos Filos", "Ocupación: Escogido de Tethe'alla"
        ), "Descripcion" => "Zelos es el escogido de Tethe'alla. Su buena apariencia, su título, y su carácter lo hacen irresistible a la mayoría de las mujeres. Gracias a esto, puede ser un poco arrogante y egoísta algunas veces. No toma las cosas muy seriamente, por lo que tiene una actitud de laissez-faire hacia sus deberes con las mujeres.", "imagenes" => array("imagen1", "imagen2", "imagen3")),

        array("Nombre" => "Regal Bryant", "Foto" => "img/siete.jpg", "Caracteristicas" => array("Género: Masculino", "Edad: 33", "Estatura: 1.88", "Peso: 68 Kg", "Clase: Luchador", "Raza: Humano", "Cabello: Azul", "Arma: Graves", "Ocupación: Previamente Aristócrata"), "Descripcion" => "Regal es un prisionero en el próspero mundo de Tethe'alla. Es mandado a capturar a Colette por el Jefe de su mundo. Es extremadamente callado y constantemente tiene una expresión de tristeza. Las pocas palabras que escapan de sus labios son dignificadas y pensadas con cuidado.", "imagenes" => array("imagen1", "imagen2", "imagen3")),
    );

    echo  "<div class= 'container-fluid' >
            <div style='width=100%'>
                 <img src='img/Tales.png' alt=''>
            </div>
          </div>";

    foreach ($personajes as $valor) {

        echo "<div class='card mb-2' style='max-width: 1920px;'>
            <div class='row g-0'>
            <div class='col-md-4'>
                <img src='" . $valor["Foto"] . "'class='img-fluid rounded-start' alt='...'>
            </div>
            <div class='col-md-8'>
                <div class='card-body'>
                <h5 class='card-title'>" . $valor["Nombre"] . "</h5>
                <p class='card-text'>" . $valor["Descripcion"] . "</p>";

        echo "<ul>";
        foreach ($valor['Caracteristicas'] as $caracteristicas) {
            echo "<li>" . $caracteristicas . "</li>";
        }
        echo "</ul>";
        echo "  <div class= 'width=500 mt-5 ml-5'ratio ratio-16x9'>
                <iframe src='https://www.youtube.com/embed/qAQUparDhtg' title='YouTube video' allowfullscreen></iframe>
              </div>

                </div>
            </div>
            </div>
        </div>";
    }


    ?>

</body>

</html>