<?php

    class Enlace {

        private $idEnlace;
        private $idRegalo;
        private $nombre;
        private $enlace;
        private $precio;
        private $imagen;
        private $prioridad;
    

        public function __construct($idEnlace="", $idRegalo="", $nombre="", $enlace="", $precio="", $imagen="", $prioridad="") {
        
            $this->idEnlace = $idEnlace;   
            $this->idRegalo = $idRegalo;
            $this->nombre = $nombre;
            $this->enlace = $enlace;
            $this->precio = $precio;
            $this->imagen = $imagen;
            $this->prioridad = $prioridad;

        }
       
        /**
         * Get the value of idRegalo
         */ 
        public function getIdRegalo()
        {
                return $this->idRegalo;
        }

        /**
         * Set the value of idRegalo
         *
         * @return  self
         */ 
        public function setIdRegalo($idRegalo)
        {
                $this->idRegalo = $idRegalo;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of enlace
         */ 
        public function getEnlace()
        {
                return $this->enlace;
        }

        /**
         * Set the value of enlace
         *
         * @return  self
         */ 
        public function setEnlace($enlace)
        {
                $this->enlace = $enlace;

                return $this;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

                return $this;
        }

        /**
         * Get the value of prioridad
         */ 
        public function getPrioridad()
        {
                return $this->prioridad;
        }

        /**
         * Set the value of prioridad
         *
         * @return  self
         */ 
        public function setPrioridad($prioridad)
        {
                $this->prioridad = $prioridad;

                return $this;
        }

        /**
         * Get the value of idEnlace
         */ 
        public function getIdEnlace()
        {
                return $this->idEnlace;
        }

        /**
         * Set the value of idEnlace
         *
         * @return  self
         */ 
        public function setIdEnlace($idEnlace)
        {
                $this->idEnlace = $idEnlace;

                return $this;
        }
    }
?>