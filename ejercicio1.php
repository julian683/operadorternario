<?php
$cantidad = readline("ingrese el numero de camisas que desea comprar: ");
$preciodecamisa = readline("ingrese el precio por cada camisa: ");

$subtotal = $cantidad * $preciodecamisa;

$descuento = $cantidad > 3 ? 0.20 : 0.10;

$valorcondescuento =$subtotal * $descuento;

$totalcondescuento = $subtotal * (1 - $descuento);

echo "subtotal: $" ,$subtotal ;
echo "condescuento: $" ,$valorcondescuento ;
echo "su total a pagar es: $",$totalcondescuento; 

?>