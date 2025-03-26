<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Barracks</title>
</head>
<body>
    <h2>Formulario de Barracks</h2>
    <form action="/barracks/store" method="POST">
        <label for="name">Nombre del Cuartel:</label>
        <input type="text" id="name" name="name" required>

        <label for="location">Ubicación:</label>
        <input type="text" id="location" name="location" required>

        <button type="submit">Guardar</button>
    </form>

    <h2>Eliminar Barracks</h2>
    <form action="/barracks/delete" method="POST">
        <label for="barrack_id">ID del Barrack:</label>
        <input type="number" id="barrack_id" name="barrack_id" required>
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
