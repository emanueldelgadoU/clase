<?php
session_start();
//session_destroy();
include("lib.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

<style>




</style>
<div class="container-fluid"

<?php

function pasarACaracter(){

    $nuevoArr=array();

    for($i=0; $i<count(($_SESSION['palabra'])); $i++){
        array_push($nuevoArr,"___ ");
    }
    return $nuevoArr;
}

function pintarArray($array){

    echo "<div class='row'>";
    echo "<div class='col-12'>";
    foreach($array as $valor){
        echo "<a class='btn btn-info m-1'>".$valor."<a>";
    }
    echo "<div>";
    echo "<div>";
}


// --------------------------------------------------------------------------------------------


if(!isset($_SESSION['letras'])){
       
        // echo pintar0();
        
        echo "<br>";
        //CREAMOS TODAS LAS SESIONES
        $_SESSION['palabra']=str_split(palabra());
        $_SESSION['palabraActual']=pasarACaracter();
        $_SESSION['letras']=[];
        $_SESSION['encontrada']=false;
        $_SESSION['contador']=0;
        echo "<center>";
        //MOSTRAMOS LA PALABRA OCULTA
        foreach($_SESSION['palabraActual'] as $valor){
            echo $valor;
        }
        echo "</center>";


}else{
        //MOSTRAMOS LA PALABRA OCULTA con los aciertos si los hubiera
        echo "<center>";
        foreach($_SESSION['palabraActual'] as $valor){
            echo $valor;
        }
        echo "</center>";
        echo "<br>";

        //PINTAMOS EL AHORCADO EN FUNCION DEL NUMERO DE FALLOS
        if($_SESSION['contador']==1){
            echo "<center>";
            echo pintar1();
            echo "<br>";
            echo '<h3 class="">'."Numero de fallos : ".$_SESSION['contador'].'<h3>';
            echo "<h3>".'Letras usadas:'."<h3>";
            pintarArray($_SESSION['letras']);
            echo "</center>";
        }elseif($_SESSION['contador']==0){
            echo "<center>";
            echo pintar0();
            echo "<br>";
            echo '<h3 class="">'."Numero de fallos : ".$_SESSION['contador'].'<h3>';
            echo "<h3>".'Letras usadas:'."<h3>";
            pintarArray($_SESSION['letras']);
            echo "</center>";
        }elseif($_SESSION['contador']==2){
            echo "<center>";
            echo pintar2();
            echo "<br>";
            echo '<h3 class="">'."Numero de fallos : ".$_SESSION['contador'].'<h3>';
            echo "<h3>".'Letras usadas:'."<h3>";
            pintarArray($_SESSION['letras']);
            echo "</center>";
        }elseif($_SESSION['contador']==3){
            echo "<center>";
            echo pintar3();
            echo "<br>";
            echo '<h3 class="">'."Numero de fallos : ".$_SESSION['contador'].'<h3>';
            echo "<h3>".'Letras usadas:'."<h3>";
            pintarArray($_SESSION['letras']);
            echo "</center>";
        }elseif($_SESSION['contador']==4){
            echo "<center>";
            echo pintar4();
            echo "<br>";
            echo '<h3 class="">'."Numero de fallos : ".$_SESSION['contador'].'<h3>';
            echo "<h3>".'Letras usadas:'."<h3>";
            pintarArray($_SESSION['letras']);
            echo "</center>";
        }elseif($_SESSION['contador']==5){
            echo "<center>";
            echo pintar5();
            echo "<br>";
            echo '<h3 class="">'."Numero de fallos : ".$_SESSION['contador'].'<h3>';
            echo "<h3>".'Letras usadas:'."<h3>";
            pintarArray($_SESSION['letras']);
            echo "</center>";
        }elseif($_SESSION['contador']==6){
            echo "<center>";
            echo pintar6();
            echo "<br>";
            echo '<h3 class="">'."Numero de fallos : ".$_SESSION['contador'].'<h3>';
            echo "<h3>".'Letras usadas:'."<h3>";
            pintarArray($_SESSION['letras']);
            echo "<br>";
            echo "</center>";
            echo '<script>window.location="'."perdio.php".'"</script>'; 
        }

        //GANA EL JUEGO
        if($_SESSION['palabraActual']==$_SESSION['palabra']){
            echo '<script>window.location="'."gano.php".'"</script>';
            //header("Location: gano.php"); este location no funciona asi que pongo script
        }
}
?>
<center>
<div class='row'>
    <div class='col-12'>
       </button>
        <h3>TECLADO</h3>
        <a class="btn btn-dark m-1"href='controlador.php?letra=A'>A</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=B'>B</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=C'>C</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=D'>D</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=E'>E</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=F'>F</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=G'>G</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=H'>H</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=I'>I</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=J'>J</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=K'>K</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=L'>L</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=M'>M</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=N'>N</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=Ñ'>Ñ</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=O'>O</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=P'>P</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=Q'>Q</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=R'>R</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=S'>S</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=T'>T</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=U'>U</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=V'>V</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=W'>W</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=X'>X</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=Y'>Y</a>
        <a class="btn btn-dark m-1"href='controlador.php?letra=Z'>Z</a>
    <div>
<div>
</center>
</div>

<script>

// function pintar(){
//     document.querySelector(".btn btn-dark m-1").classList.replace("btn btn-primary m-1")
// }


</script>

</body>
</html>

