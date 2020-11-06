<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjercicioTres</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form method="POST" action="imcPersona.php">
        <h1>INDICE DE MASA CORPORAL</h1>

        <label for="nombre">Nombre del paciente:</label>
        <input type="text" name="nombre" placeholder="">

        <label for="peso">Peso en kilogramos:</label>
        <input type="text" name="peso" placeholder="">

        <label for="estatura">Estatura en metros:</label>
        <input type="text" name="estatura" placeholder="">

        <input type="submit" name="Calcular" value="Calcular">
    </form>

</body>
</html>