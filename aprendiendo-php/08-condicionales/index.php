<?php

// Condicionales

$color = "rojo";

if ($color == "rojo") {
    echo "<h3>El color es rojo</h3>";
} else {
    echo "<h3>El color no es rojo</h3>";
}

/* 
== igual que
=== identico
!= diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual
>= mayor o igual
*/
$dia = 4;

switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    default:
        echo "Domingo";
        break;
}

// EL GOTO

goto marca;
echo "<h3>Instrucciones...</h3>";
echo "<h3>Instrucciones...</h3>";
echo "<h3>Instrucciones...</h3>";

marca: echo "<h1>Me he saltado 3 echos</h1>";
