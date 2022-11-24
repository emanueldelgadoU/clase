<?php

include("truco.php");
class Juego{ 

   private $nombre;
   private $genero;
   private $plataforma; 

    function __construct($nombre, $genero, $plataforma){
        
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->plataforma = $plataforma; 
        $this->truco=array();

    }


    public function getNombre(){
        return $this->nombre;
    }
    
    public function getGenero(){
        return $this->genero;
    }

    
    public function getPlataforma(){
        return $this->plataforma;
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function setGenero($genero){
        $this->genero=$genero;
    }

    public function setPlataforma($plataforma){
        $this->plataforma=$plataforma;
    }

    public function pintar(){

    }

    public function addTruco($valor){
        array_push($this->truco, $valor);
    }

    public function deleteTruco($truco){

        foreach()

    }

}

?>

