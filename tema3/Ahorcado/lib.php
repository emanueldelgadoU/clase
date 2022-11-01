<?php


function palabra(){
    $arrayPalabra=["HOLA","HOLA","HOLA","HOLA","HOLA", "HOLA","HOLA"];
    $palabra=$arrayPalabra[rand(0,6)];
    return $palabra;
}



function pintarArr($num){
  $arrayFotos = ['fotosA/000.png','fotosA/001.png','fotosA/002.png',
  'fotosA/003.png','fotosA/004.png','fotosA/005.png','fotosA/006.png'];
  echo '<img src="'.$arrayFotos[$num].'" alt="">';
}

function gif(){
  return "<img class='img-fluid' src='fotosA/giphy.gif'>" ;
}


?>
