<?php

?>

<?php




function palabra(){
    $arrayP=["pelota","avion","juego","tiburon","tren", "raqueta","pelicula"];
    $palabra=$arrayP[rand(0,6)];
    return $palabra;
}



function pintar1(){
    
 echo"+---+"."<br>";
 echo"<p>           s</p>"."<br>";
 echo"|   "."<br>";
 echo"|   "."<br>";
 echo"|   "."<br>";
 echo"|   "."<br>";
 echo"=========";
}

function pintar2(){
    echo"   +---+";
    echo"<br>";
    echo"   |   |";
    echo"<br>";
    echo"       |";
    echo"<br>";
    echo"       |";
    echo"<br>";
    echo"       |";
    echo"<br>";
    echo"       |";
    echo"=========";
}

function pintar3(){
    echo"
    +---+
    |   |
    O   |
    |   |
        |
        |
  =========";
}

function pintar4(){
    echo"
    +---+
    |   |
    O   |
   /|   |
        |
        |
  =========";
}

function pintar5(){
    echo"
    +---+
    |   |
    O   |
   /|\  |
        |
        |
  =========";
}

function pintar6(){
    echo"
    +---+
    |   |
    O   |
   /|\  |
   /    |
        |
  =========";
}

function pintar7(){
    echo"
    +---+
    |   |
    O   |
   /|\  |
   / \  |
        |
  =========
  GAME OVER";
}








?>
