<?php
session_start();
// session_destroy();
include("lib.php");
?>

            <form class="user" action="introducirLetra.php" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="letra" name="letra"
                         placeholder="Escribe una Letra" />
                    </div>
                    
                     <!-- HIDDEN -->
                     <!-- HIDDEN -->
                     <!-- HIDDEN -->   
                    <input type="hidden" name="accion" value="entrar" />        
                    <!-- HIDDEN -->
                    <!-- HIDDEN --> 
                    <!-- HIDDEN -->
                    <!-- HIDDEN -->
                       
                    <button type="submit" class="btn btn-primary btn-user btn-block">Pick</button>
                  </form>

<?php
   
   $_SESSION ['palabra'] = "hola";

   $_SESSION ['palabraActual']="****";

   // if(isset($_SESSION ['palabraActual'])){
   //    $_SESSION ['palabraActual'] =  $_SESSION['palabraActual2'];
   // }

   $_SESSION ['arrLetras'] =['Letras udadas :'];


   echo $_SESSION['palabraActual'];
   


echo "<br>";
echo "<br>";

foreach($_SESSION ['arrLetras'] as $valor){
    echo $valor;
}











?>
