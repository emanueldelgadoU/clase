<?php

class VistaArticulos {

    public static function render($articulos){

        include('./cabecera');

        foreach ($articulos as $articulo) {

            echo '
            <div class="my-20 mx-auto rounded ">
            <div class="w-1/3 mx-auto my-20 overflow-hidden shadow-lg">
      
              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg bg-white">
                <img class="h-full" src="'.$articulo->getImagen().'" alt="">
                <div class="p-6 hover:bg-indigo-700 hover:text-white transition duration-300 ease-in ">
                  <h1 class="text-4xl md:text-2xl test-gray-700 font-semibold">'.$articulo->getTitulo().'</h1>
                  <p class="leading-relaxed mb-3">'.$articulo->getTexto().'</p>
                </div>
              </div>
      
            </div>
            </div>';


        }
        include('./pie.php');
    }
}



?>

