<?php


function palabra(){
    $arrayPalabra=["HOLA","HOLA","HOLA","HOLA","HOLA", "HOLA","HOLA"];
    $palabra=$arrayPalabra[rand(0,6)];
    return $palabra;
}


function pintar0(){
  return "<img class='img-fluid' src='fotosA/000.png'>" ;
}

function pintar1(){
  return "<img class='img-fluid' src='fotosA/001.png'>" ;
}

function pintar2(){
  return "<img class='img-fluid' src='fotosA/002.png'>" ;
}

function pintar3(){
  return "<img class='img-fluid' src='fotosA/003.png'>" ;
}

function pintar4(){
  return "<img class='img-fluid' src='fotosA/004.png'>" ;
}

function pintar5(){
  return "<img class='img-fluid' src='fotosA/005.png'>" ;
}

function pintar6(){
  return "<img class='img-fluid' src='fotosA/006.png'>" ;
}

function gif(){
  return "<img class='img-fluid' src='fotosA/giphy.gif'>" ;
}


?>
