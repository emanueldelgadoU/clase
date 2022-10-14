    
    <?php
        $notas=array(
            array("nombre"=>"DIEGO","materia"=>"SERVIDOR","nota"=>10),
            array("nombre"=>"EMILIO","materia"=>"SERVIDOR","nota"=>9),
            array("nombre"=>"LATI","materia"=>"SERVIDOR","nota"=>9),
            array("nombre"=>"PILAR","materia"=>"SERVIDOR","nota"=>9),
            array("nombre"=>"PILAR","materia"=>"SERVIDOR","nota"=>8),
            array("nombre"=>"GUILLERMO","materia"=>"SERVIDOR","nota"=>7),
            array("nombre"=>"ALEX","materia"=>"SERVIDOR","nota"=>9),
            array("nombre"=>"RUBEN","materia"=>"SERVIDOR","nota"=>9),
            array("nombre"=>"EMI","materia"=>"SERVIDOR","nota"=>8),
            array("nombre"=>"DESCONOCIDO","materia"=>"SERVIDOR","nota"=>3)
        );

        array_multisort(array_column($notas,"nombre"), SORT_DESC, array_column($notas,"nota"), $notas);

        foreach($notas as $valor) {
            echo $valor["nombre"]." - ".$valor["materia"]." - ".$valor["nota"]."<br>";
        }

        echo array_sum(array_column($notas,"nota")) / count($notas);

        function suspenso($nota) {
            return $nota<5;
        }
        echo "<br>";
        echo count(array_filter(array_column($notas,"nota"),"suspenso"));
    ?>
