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

    <?php

    // 6. Vamos a crear un programa que calcule el IVA de un carrito de la compra. El
    // carrito será un array bidimensional asociativo de este tipo: (Puedes añadir más
    // productos y más campos a tu elección)
    // $carrito = array(
    // array(“id” => 1234, “nombre” => “PS4”, “precio” => 349.95, “cant” => 2, “iva_r” => 0),
    // array(“id” => 1235, “nombre” => “iPhone XS”, “precio” => 1249.95, “cant” => 1, “iva_r” => 0),
    // array(“id” => 1236, “nombre” => “Chocolate”, “precio” => 9.95, “cant” => 5, “iva_r” => 1)
    // )
    // Deberéis crear una función llamada subtotal($linea_pedido) que calcule el precio de
    // cada línea de pedido, multiplicando el precio por la cantidad y aplicando el iva
    // correspondiente, si iva_r es 0 será del 21% y si iva_r es 1 será del 10%.
    // Mostrar en una tabla HTML el carrito de la compra (nombre, precio, cantidad y
    // subtotal). En la última fila aparecerá el total del pedido a pagar.
    // Se tendrá en cuenta la visualización y el estilo del carrito de la compra resultante.


    $carrito = array(
        array("id" => 1234, "nombre" => "PS4", "precio" => 349.95, "cant" => 2, "iva_r" => 0),
        array("id" => 1235, "nombre" => "iPhone XS", "precio" => 1249.95, "cant" => 1, "iva_r" => 0),
        array("id" => 1236, "nombre" => "Chocolate", "precio" => 9.95, "cant" => 5, "iva_r" => 1)
    );

    function subTotal(&$linea_Pedido)
    {

        if ($linea_Pedido["iva_r"] === 0) {
            return ($linea_Pedido["precio"] * $linea_Pedido["cant"]) * 1.21;
        } else {
            return ($linea_Pedido["precio"] * $linea_Pedido["cant"]) * 1.21;
        }
    }

    //ENCABEZADO TABLA
    echo "<table class='table table-striped table-hover'>";
    echo "<thead class='text-primary'>";
    echo "<tr>";

    foreach (array_keys($carrito[0]) as $valor) {
        echo "<td>" . strtoupper($valor) . "</td>";
    }
    echo "<td>" . "SUBTOTAL" . "</td>";
    echo "</tr>";
    echo "</thead>";


    //CUERPO TABLA
    echo "<tbody>";
    $total=0;
    foreach ($carrito as $compra) {
    echo "<tr>";///


    echo "<td>". $compra["id"] ."</td>";
    echo "<td>". $compra["nombre"] ."</td>";
    echo "<td>". $compra["precio"] ."</td>";
    echo "<td>". $compra["cant"] ."</td>";
    echo "<td>";
        if ($compra['iva_r'] == 0) 
            echo "21%";
        else 
            echo "10%";
    echo "</td>";

    echo "<td>" . subTotal($compra) . " €</td>";
    $total += subTotal($compra);





    echo "</tr>";///
    }
    echo "<tr><td colspan='5'>Total</td><td>" . $total . " €</td></tr>"; 
    echo "</tbody>";
    echo "</table>";
    ?>

</body>

</html>