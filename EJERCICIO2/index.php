<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjercicioUno</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form method="POST" action="comisionEmpleados.php">
        <h1>MODULO DE VENTAS</h1>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" placeholder="">

        <label for="nombre">Cantidad automoviles vendidos:</label>
        <input type="text" name="cantAutosVendidos" placeholder="">

        <label for="nombre">Precio total automoviles vendidos:</label>
        <input type="text" name="precioTotalAutos" placeholder="">

        <input type="submit" name="Enviar" value="Enviar">
    </form>

</body>
</html>