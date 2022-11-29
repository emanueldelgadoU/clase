<?php

class ControladorPrestamos {


    public static function mostrarPrestamos() {
        //LLamar al modelo para obtener todas las películas en un array de Pelicula
        $prestamos = prestamosBD::getPrestamos();

        //Llamar a una vista para pintar esas películas
        vistaPrestamosTodos::render($prestamos);
    }


    public static function formularioPrestamo() {
        $libros = LibroBD::getLibros();
        $usuarios = UsuariosBD::getUsuarios();
        $prestamos = PrestamosBD::getPrestamos();
        VistaFormularioPrestamo::render($prestamos,$libros,$usuarios);
    }
    
    public static function crearPrestamo($prestamo) {
        $prestamo = new Prestamo($prestamo['idLibro'],$prestamo['idUsuario'],$prestamo['fechaInicio'],$prestamo['fechaFin'],$prestamo['estado']);
        PrestamosBD::insertarPrestamo($prestamo);
        echo '<script>window.location="'."index.php".'"</script>';
    }

    public static function actualizarPrestamo($id,$fecha,$estado) {
        PrestamosBD::modificarPrestamo($id,$fecha,$estado);
        echo '<script>window.location="'."index.php".'"</script>';
    }

    public static function buscarPorUser($dni) {
        $prestamos=PrestamosBD::getPrestamosPorDNI($dni);
        vistaPrestamosTodos::render($prestamos);
    }

    public static function buscarPorEstado($estado) {
        $prestamos=PrestamosBD::getPrestamosPorEstado($estado);
        vistaPrestamosTodos::render($prestamos);
    }


  









}




?>