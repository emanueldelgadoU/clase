<?php

    class Partida {

        private $idPartida;
        private $idJugador1;
        private $idJugador2;
        private $idJugador3;
        private $idJugador4;
        private $fecha;
        private $hora;
        private $ciudad;
        private $cubierta;
        private $estado;
        private $lugar;


      
    

        public function __construct($idJugador1="",$idJugador2="", $idJugador3="", $idJugador4="", $fecha="", $hora="", $ciudad="", $cubierta="", $estado="", $lugar="") {
        
            $this->idJugador1 = $idJugador1;
            $this->idJugador2 = $idJugador2;
            $this->idJugador3 = $idJugador3;
            $this->idJugador4 = $idJugador4;
            $this->fecha = $fecha;
            $this->hora = $hora;
            $this->ciudad = $ciudad;
            $this->cubierta = $cubierta;
            $this->estado = $estado;
            $this->lugar = $lugar;

        }
   

        /**
         * Get the value of idPartida
         */ 
        public function getIdPartida()
        {
                return $this->idPartida;
        }

        /**
         * Set the value of idPartida
         *
         * @return  self
         */ 
        public function setIdPartida($idPartida)
        {
                $this->idPartida = $idPartida;

                return $this;
        }

        /**
         * Get the value of idJugador1
         */ 
        public function getIdJugador1()
        {
                return $this->idJugador1;
        }

        /**
         * Set the value of idJugador1
         *
         * @return  self
         */ 
        public function setIdJugador1($idJugador1)
        {
                $this->idJugador1 = $idJugador1;

                return $this;
        }

        /**
         * Get the value of idJugador2
         */ 
        public function getIdJugador2()
        {
                return $this->idJugador2;
        }

        /**
         * Set the value of idJugador2
         *
         * @return  self
         */ 
        public function setIdJugador2($idJugador2)
        {
                $this->idJugador2 = $idJugador2;

                return $this;
        }

        /**
         * Get the value of idJugador3
         */ 
        public function getIdJugador3()
        {
                return $this->idJugador3;
        }

        /**
         * Set the value of idJugador3
         *
         * @return  self
         */ 
        public function setIdJugador3($idJugador3)
        {
                $this->idJugador3 = $idJugador3;

                return $this;
        }

        /**
         * Get the value of idJugador4
         */ 
        public function getIdJugador4()
        {
                return $this->idJugador4;
        }

        /**
         * Set the value of idJugador4
         *
         * @return  self
         */ 
        public function setIdJugador4($idJugador4)
        {
                $this->idJugador4 = $idJugador4;

                return $this;
        }

        /**
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        /**
         * Get the value of hora
         */ 
        public function getHora()
        {
                return $this->hora;
        }

        /**
         * Set the value of hora
         *
         * @return  self
         */ 
        public function setHora($hora)
        {
                $this->hora = $hora;

                return $this;
        }

        /**
         * Get the value of ciudad
         */ 
        public function getCiudad()
        {
                return $this->ciudad;
        }

        /**
         * Set the value of ciudad
         *
         * @return  self
         */ 
        public function setCiudad($ciudad)
        {
                $this->ciudad = $ciudad;

                return $this;
        }

        /**
         * Get the value of cubierta
         */ 
        public function getCubierta()
        {
                return $this->cubierta;
        }

        /**
         * Set the value of cubierta
         *
         * @return  self
         */ 
        public function setCubierta($cubierta)
        {
                $this->cubierta = $cubierta;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        /**
         * Get the value of lugar
         */ 
        public function getLugar()
        {
                return $this->lugar;
        }

        /**
         * Set the value of lugar
         *
         * @return  self
         */ 
        public function setLugar($lugar)
        {
                $this->lugar = $lugar;

                return $this;
        }
    }
?>