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
      
      <center>
      <div class="card mb-3 mt-5" style="max-width: 90%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="'.$imagen.'" class="img-fluid max-width: 100% rounded-start" alt="...">
          </div>
          <div class="col-md-8 p-6 hover:bg-indigo-700 hover:text-white transition duration-300 ease-in">
            <div class="card-body">
              <h2 class="text-4xl md:text-2xl test-gray-700 font-semibold my-2">'.strtoupper($texto).'</h2>
              <p class="card-text">'.$respuestaChat.'</p>
            </div>
          </div>
        </div>
      </div>
      </center>

  
      <center>
      <div class="mx-center my-5">
      <a href="enrutador.php?accion=mostrarTextArea" class=  "text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Generar Otro</a>
      <a href="enrutador.php?accion=guardar&titulo='.$texto.'&texto='.$respuestaChat.'&foto='.urldecode($imagen).'" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Guardar</a>
      </div>
      </center>';
      


      include('./pie.php');

    }

  }

?>

