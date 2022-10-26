<?php
session_start();
// session_destroy();
include("lib.php");
?>


<?php

$_SESSION['palabra'] = "hola";
echo  $_SESSION['palabraActual'];

echo "<br>";

echo "<a href='introducirLetra.php?letra=h'>h</a><br>";
echo "<a href='introducirLetra.php?letra=l'>l</a><br>";
echo "<a href='introducirLetra.php?letra=o'>o</a><br>";
echo "<a href='introducirLetra.php?letra=a'>a</a><br>";
   

$_SESSION ['arrLetras'] =['Letras udadas :'];





?>
