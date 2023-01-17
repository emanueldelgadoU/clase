    <?php


    class VistaCartas{

    public static function mostrarCartasAPI($pagina){

        include("cabecera.php");

        $uri = "https://db.ygoprodeck.com/api/v7/cardinfo.php?cardset=metal%20raiders&num=20&offset=$pagina";       

        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = 'X-Auth-Token:';



        $stream_context = stream_context_create($reqPrefs);
        $resultado = file_get_contents($uri, false, $stream_context);

        //Pasar de json a objeto php y recorrer los resultados
        if ($resultado != false) {
            $respPHP = json_decode($resultado);

            foreach($respPHP->data as $carta) {
               
                echo"
                <div class='card mt-2 ms-2' style='width: 18rem;'>
                    <img src='{$carta->card_images[0]->image_url}' class='card-img-top mt-2' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$carta->name}</h5>
                        <p class='card-text'>{$carta->type}</p>
                        <a class='btn btn-dark' href='enrutador.php?accion=mostrarDetalle&id=$carta->id'>Detalles</a>
                    </div>
                </div>";
                
            }

            echo "<div class='mt-3'>";
            echo "<a class='btn btn-dark' href='enrutador.php?accion=mostrarCartasPagina&pagina=".(0)."'>|<</a>";

            echo "&nbsp;";

            if ($pagina > 20) {
                echo "<a class='btn btn-dark' href='enrutador.php?accion=mostrarCartasPagina&pagina=".($pagina - 20)."'><</a>";
            } else {
                echo "<a class='btn btn-dark disabled' href='enrutador.php?accion=mostrarCartasPagina&pagina=".($pagina - 20) . "'><</a>";
            }

            echo "&nbsp;";

            if ($pagina < 140) {
                echo "<a class='btn btn-dark' href='enrutador.php?accion=mostrarCartasPagina&pagina=".($pagina + 20)."'>></a>";
            } else {
                echo "<a class='btn btn-dark disabled' href='enrutador.php?accion=mostrarCartasPagina&pagina=".($pagina + 20)."'>></a>";
            }

            echo "&nbsp;";
            echo "<a class='btn btn-dark' href='enrutador.php?accion=mostrarCartasPagina&pagina=".(140)."'>>|</a>";
        echo "</div>";


        }

        include("pie.php");

        }


        public static function mostrarCartasDetalle($idCarta){

            include("cabecera.php");
            
            
            
            $uri = "https://db.ygoprodeck.com/api/v7/cardinfo.php";       
    
            $reqPrefs['http']['method'] = 'GET';
            $reqPrefs['http']['header'] = 'X-Auth-Token:';
    
    
    
            $stream_context = stream_context_create($reqPrefs);
            $resultado = file_get_contents($uri, false, $stream_context);
    
            //Pasar de json a objeto php y recorrer los resultados
            if ($resultado != false) {
                $respPHP = json_decode($resultado);
    

                foreach($respPHP->data as $carta) {

                    if($carta->id==$idCarta){
                    echo "<center>" ;
                    echo"
                    <div class='card mt-2 ms-2' style='width: 18rem;'>
                        <img src='{$carta->card_images[0]->image_url}' class='card-img-top mt-2' alt='...'>
                        <div class='card-body'>
                            <h3 class='card-title'>{$carta->name}</h3>
                            <p class='card-text'>TYPE: {$carta->type}</p>
                            <p class='card-text'>FRAME TYPE: {$carta->frameType}</p>
                            <p class='card-text'>DESCRIPTION: {$carta->desc}</p>
                            <p class='card-text'>RACE: {$carta->race}</p>
                            

                            
                        </div>
                    </div>
                    <a class='btn btn-dark mt-3' href='enrutador.php?accion=mostrarCartas'>Todas las cartas</a>";
                    echo "</center>" ;
                }
                    
                }
            }
    
            include("pie.php");
    
            }
    }
    

    ?>
  
