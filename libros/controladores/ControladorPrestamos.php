<?php

class ControladorPrestamos {


    public static function mostrarPrestamos() {
        //LLamar al modelo para obtener todas las películas en un array de Pelicula
        $prestamos = PrestamosBD::getPrestamos();

        //Llamar a una vista para pintar esas películas
        VistaPrestamosTodos::render($prestamos);
    }

    public static function insertarPrestamo($prestamo) {
     
        $prestamo = new Prestamo($prestamo['idLibro'],$prestamo['idUsuario'],$prestamo['fechaInicio'],$prestamo['fechaFin'],$prestamo['estado']);
        PrestamosBD::insertarPrestamo($prestamo);
        echo '<script>window.location="'."index.php".'"</script>';

    }

    public static function modificarPrestamo($idPrestamo,$fechaFin,$estado) {
     
        PrestamosBD::modificarPrestamo($idPrestamo,$fechaFin,$estado);
        echo '<script>window.location="'."index.php".'"</script>';
        
    }

 

  









}




?>