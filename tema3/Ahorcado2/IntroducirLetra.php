<?php
session_start();
//session_destroy();
include("lib.php");
?>

<?php


$_SESSION ['palabraActual']="****";
$letra=$_GET["letra"];

for($i=0; $i < strlen($_SESSION['palabra']); $i++) {
  if ($_SESSION['palabra'][$i] == $letra) {
      $_SESSION['palabraActual'][$i] = $letra;
  }
}

echo $_SESSION['palabraActual'];
echo '<script>window.location="'."index.php".'"</script>'; 
?>
