<?php
/*
Declara las siguientes variables con sus tipos correspondientes:
Producto: cadena de texto (string)
Precio unitario: número flotante (float)
Cantidad: entero (int)
Aplica descuento: booleano (bool)
Utiliza operadores aritméticos y de asignación para calcular:
El subtotal (precio * cantidad).
El descuento del 10% si la variable booleana es true (usando un operador ternario u operador lógico).
El total final sumando un IVA del 21%.
Muestra una ficha de resumen en HTML utilizando sintaxis corta de PHP (<?= ?>) para embeber cada dato en una tabla HTML.
*/
    $producto = "Gominola";
    $precioUnitario = 1.2;
    $cantidad = 4;
    $descuentoSiNo = true;
    $descuentoPorcentaje = 10;
    $descuento = 0;
    $total = 0;

    $subtotal = $cantidad * $precioUnitario;
    //echo "\n" . $subtotal;

    if($descuentoSiNo){
        $descuento = $subtotal * ($descuentoPorcentaje / 100);
        $subtotal -= $descuento;
    }
    //echo "\n" . $subtotal;

    $subtotal += ($subtotal * 0.21);
    //echo "\n" . $subtotal;
echo "

    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <title>UT2.1_Actividades</title>
    </head>
    <body>

        <h2>UT2.1_Actividades</h2>
        <table border='1px'>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio<br>Unitario</th>
                    <th>Cantidad</th>
";   
                    if($descuentoSiNo){echo "<th>Descuento</th>";}
echo "                    
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{$producto}</td>
                    <td>{$precioUnitario}</td>
                    <td>{$cantidad}</td>
";
                    if($descuentoSiNo){echo "<th>$descuento</th>";}
echo "
                    <td>{$subtotal}</td>
                </tr>
            </tbody>
        </table>

    </body>
    </html>
    ";
?>
 
 