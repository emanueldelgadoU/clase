<?php
session_start();




if (isset($_POST)=="cantidadJugadores") {
    
    $_SESSION['cantidadJugadores']=$_POST['cantidadJugadores'];
    $_SESSION['num']=[];

    for($i=1; $i<100; $i++){
        array_push($_SESSION['num'],$i);   
    }

    echo '<script>window.location="'."index.php".'"</script>'; 
}




?>