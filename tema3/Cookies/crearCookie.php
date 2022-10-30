<?php

// function encriptar($mensaje,$clave){
//     $cadena="";
//     for($i=0; $i<strlen($mensaje); $i++){
//       $cadena=$cadena.chr(ord($mensaje[$i])+$clave);
//     }
//     return $cadena;
// }


// function desencriptar($mensajeEn,$clave){
//     $cadena="";
//      for($i=0; $i<strlen($mensajeEn); $i++){
//          $cadena=$cadena.chr(ord($mensajeEn[$i])-$clave);
//      }
//      return $cadena;
//  }


//ConfiguraciÃ³n del algoritmo de encriptaciÃ³n
//Debes cambiar esta cadena, debe ser larga y unica
//nadie mas debe conocerla
$clave  = 'Una cadena, muy, muy larga para mejorar la encriptacion';
//Metodo de encriptaciÃ³n
$method = 'aes-256-cbc';
// Puedes generar una diferente usando la funcion $getIV()
$iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");
 /*
 Encripta el contenido de la variable, enviada como parametro.
  */
 function encriptar ($valor,$method, $clave, $iv) {
     return openssl_encrypt ($valor, $method, $clave, false, $iv);
 };
 /*
 Desencripta el texto recibido
 */
 function desencriptar ($valor,$method, $clave, $iv) {
     $encrypted_data = base64_decode($valor);
     return openssl_decrypt($valor, $method, $clave, false, $iv);
 };
 /*
 Genera un valor para IV
 */
 $getIV = function () use ($method) {
     return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)));
 };



//Si he pinchado en un link
if ($_GET) {

    if (isset($_COOKIE["servidor"])) {
        //Leemos lo que ya te gusta
        $gustos = $_COOKIE['servidor'];

        //Aquí desencriptas los datos
        
            //-----
            //-----
        $gustos=desencriptar($gustos,$method, $clave, $iv);
            //-----
            //-----

        //Separar los gustos y meterlos en un array
        $gustosArray = explode("#",$gustos);

        //CreacionCookie # moda-2 # deportes-2  # juegos-0

        for($i=1; $i<count($gustosArray); $i++) {
            //Separa moda de 1
            
            $gustoContadorArray = explode("-",$gustosArray[$i]);
            //Separamos por un lado moda (posición 0) y por otro el contador (posición 1)

            if ($_GET['interes'] == $gustoContadorArray[0]) {
                $gustoContadorArray[1]++;
            }

            $gustosArray[$i] = implode("-", $gustoContadorArray);
        }

        //Volvemos a convertir a string ya quitados los duplicados
        $gustosString = implode("#", $gustosArray);
        
            //Aquí encriptas los datos 
            //-----
            //-----
        //   $gustosString=encriptar($gustosString,1);
          
            // $gustosString = hash('sha512',$gustosString);
            //-----
            //-----

        //Creación de la cookie
        setcookie('servidor',encriptar($gustosString,$method, $clave, $iv), time()+60000, "/tema3/PracticaCokies", "localhost", false, true);
        //echo "Cookie creada";
    } else {
        //Primera vez que entra
        setcookie('servidor',encriptar("CreacionCookie#moda-0#deporte-0#juegos-0",$method, $clave, $iv), time()+60000, "/tema3", "localhost", false, true);

    }

    echo '<script>window.location="'."index.php".'"</script>'; 
}

