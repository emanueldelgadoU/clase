<?php
include("juego.php");

class Truco{ 

    private $nombre;
    private $descripcion;

    function __construct($nombre, $descripcion){
        
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
      
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getDescripcion($descripcion){
        return $this->$descripcion;
    }
    
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }

  

    

  

}


?>

