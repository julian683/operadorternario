<?php
$edad = readline("ingrese su edad: ");

$mensaje = ($edad >= 18) ?
(readline("¿tienes licencia de conducir?: ")== "si" ? "puedes conducir" : "debes obtener una licencia de conduccion primero")
 : "no puedes conducir" ;

 echo $mensaje;

?>