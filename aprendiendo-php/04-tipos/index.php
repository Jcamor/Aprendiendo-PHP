<?php

// Tipos de datos

$numero=100;
echo gettype($numero);
echo "<br>";
$decimal=27.9;
echo gettype($decimal);
echo "<br>";
$texto1="Hola \" ";
echo gettype($texto1);
echo "<br>  Hola  $texto1<br>";
$verdadero=true;
echo gettype($verdadero);
echo "<br>";
$Null=null;
echo gettype($Null);

// debugear
$miNombre[]="Juan Carlos Amor";
$miNombre[]="Juan Carlos Amor";
$miNombre[]="Juan Carlos Amor";
var_dump($miNombre);