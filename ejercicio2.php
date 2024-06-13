<?php
$articulos = readline ("cantidad de articulos comprados: ");
$precio = readline ("precio por cada articullo. ");
 
$articulos >=10 ? $descuento = 0.10 : $descuento = 0 ;

$total = $articulos* $precio * (1 - $descuento);

echo "total a pagar:$ " , number_format ($total);
?>