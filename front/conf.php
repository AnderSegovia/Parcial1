<?php
$server ="localhost";
$user ="root";
$pwd ="";
$bd ="parcial01";

$conexion = new mysqli($server,$user,$pwd,$bd);
if ($conexion == true){
    //echo "conexion establecida";//
}

else{
    echo "no se realizo la conexion";
}

?>