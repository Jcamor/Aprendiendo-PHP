<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario en PHP para el envio por POST y GET</title>
</head>

<body>
    <h1>Formulario en PHP</h1>
    <!--form method="GET" action="recibir.php"> que lo envie por el método GET-->
    <form method="POST" action="recibir.php">
        <!--que lo envie por el método POST-->
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" />
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" />
        </p>

        <input type="submit" value="Enviar datos" />
    </form>

</body>

</html>