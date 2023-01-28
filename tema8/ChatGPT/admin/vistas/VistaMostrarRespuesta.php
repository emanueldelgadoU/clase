<?php

class VistaMostrarRespuesta {

    public static function render($texto) {
     
      require_once('./vendor/autoload.php');
      include('./cabecera.php');
      
      $client = new \GuzzleHttp\Client();
      
      //Vendría del textarea
      $textoArticulo = "Escribe un artículo sobre " . $texto;
      
      $response = $client->request('POST', 'https://api.openai.com/v1/completions', [
        'body' => '{"model": "text-davinci-003", "prompt": "'.$textoArticulo.'", "temperature": 0, "max_tokens": 250, "n": 1}',
        'headers' => [
          'Authorization' => 'Bearer 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',
          'accept' => 'application/json',
          'content-type' => 'application/json',
        ],
      ]);
      
      $respuesta = $response->getBody();
      
      $respuestaJSON = json_decode($respuesta);
      
      $respuestaChat = $respuestaJSON->choices[0]->text;
      echo "<br>";
      
      $textoImagen = $texto;
      $response = $client->request('POST', 'https://api.openai.com/v1/images/generations', [
        'body' => '{"prompt": "'.$textoImagen.'", "size": "1024x1024", "n": 1}',
        'headers' => [
          'Authorization' => 'Bearer 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',
          'accept' => 'application/json',
          'content-type' => 'application/json',
        ],
      ]);
      
      $respuesta = $response->getBody();
    
      $respuestaJSON = json_decode($respuesta);
      
      $imagen = $respuestaJSON->data[0]->url;
      
      echo '
      
      <div class="my-20 mx-auto rounded ">
      <div class="w-8/12 mx-auto my-20 overflow-hidden shadow-lg">

        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg bg-white">
          <img class="h-full" src="'.$imagen.'" alt="">
          <div class="p-6 hover:bg-indigo-700 hover:text-white transition duration-300 ease-in ">
            <h1 class="text-4xl md:text-2xl test-gray-700 font-semibold">'.$texto.'</h1>
            <p class="leading-relaxed mb-3">'.$respuestaChat.'</p>
          </div>
        </div>

      </div>
      </div>

      <div class="mx-center my-5">
      <a href="enrutador.php?accion=mostrarTextArea" class=  "text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Generar Otro</a>
      <a href="enrutador.php?accion=guardar&titulo=titulo='.$texto.'&texto='.$respuestaChat.'&imagen='.$imagen.'" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Guardar</a>
      </div>';


      include('./pie.php');

    }

  }

?>

