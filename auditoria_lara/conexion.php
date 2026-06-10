<?php
    $servidor='localhost';
    $usuario='root';
    $contra='';
    $base='tp2udi';

$conexion= new mysqli($servidor,$usuario,$contra,$base);

if ($conexion -> connect_error) {
    echo ("<h2>Fallo la conexion</h2>");
} 
?>
