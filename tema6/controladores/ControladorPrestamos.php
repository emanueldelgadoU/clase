<?php

class ControladorPrestamos {


    public static function mostrarPrestamos() {
        //LLamar al modelo para obtener todas las películas en un array de Pelicula
        $prestamos = prestamosBD::getPrestamos();

        //Llamar a una vista para pintar esas películas
        vistaPrestamosTodos::render($prestamos);
    }


    public static function formularioPrestamo() {
        VistaFormularioPrestamo::render();
    }
    
    public static function crearPrestamo($prestamo) {
        $prestamo = new Prestamo(0,$prestamo['idLibro'],$prestamo['idUsuario'],$prestamo['fechaInicio'],$prestamo['fechaFin'],$prestamo['estado']);
        PrestamosBD::insertarPrestamo($prestamo);
        ControladorPrestamos::mostrarPrestamos();
    }









}




?>