<?php

// Constantes

define('nombre','Juan Carlos Amor');
define('web','juancarlosamor.es');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

// Variable

$web="Juancar";
echo '<h1>'.$web.'</h1>';
 //por esos usamos el $ para referirnos a la variable

 // Constantes predefinidas

 echo PHP_VERSION;
 echo "<br>";
 echo PHP_OS;
 echo "<br>";
 echo PHP_EXTENSION_DIR;
 echo "<br>";
 echo __FILE__;
 echo "<br>";
 function holaMundo(){
    echo __FUNCTION__;
 }

 holaMundo();
 