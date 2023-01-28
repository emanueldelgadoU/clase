<?php

class VistaArticulos {

    public static function render($articulos){
        require_once('./vendor/autoload.php');
        include('./cabecera.php');

        foreach ($articulos as $articulo) {

            echo '
            <center>
            <div class="card mb-3" style="max-width: 90%;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="'.$articulo->getImagen().'" class="img-fluid max-width: 100% rounded-start" alt="...">
                </div>
                <div class="col-md-8 p-6 hover:bg-indigo-700 hover:text-white transition duration-300 ease-in">
                  <div class="card-body">
                    <h2 class="text-4xl md:text-2xl test-gray-700 font-semibold my-2">'.strtoupper($articulo->getTitulo()).'</h2>
                    <p class="card-text">'.$articulo->getTexto().'</p>
                  </div>
                </div>
              </div>
            </div>
            </center>';

          
        }
        include('./pie.php');
    }
}



?>

