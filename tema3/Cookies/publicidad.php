<?php



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

   
    echo "TE gusta:". desencriptar($_COOKIE['servidor'],$method, $clave, $iv);

?> 