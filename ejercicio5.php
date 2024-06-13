<?php
$largo = readline("ingrese el largo de terreno en metros: ");
$ancho = readline("ingrese el ancho de terreno en metros: ");

$area = $largo * $ancho;
$tipocultivo = $area >=1000 ? "cultivos extensivos" : "cultivos de jardin";

echo "el terreno es adecuado para " .$tipocultivo . ".";

?>