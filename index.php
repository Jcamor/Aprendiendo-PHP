<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imprimir por pantalla Master PHP</title>
</head>
<body>
    <h1>Master en PHP</h1>

    <?= "Bienvenido al curso"?>

    <?php
        // Titular de la sección
        echo "<h3>Listado de videojuegos:</h3>";
        echo "<ul>"
        . ""
            . "<li>GTA</li>"
            . "<li>Fifa</li>"
            . "<li>Mario Bros</li>"
            . "</ul>";
        echo "<p>Esta es toda "." - "."lista de juegos </p>";
    ?>

</body>
</html>


