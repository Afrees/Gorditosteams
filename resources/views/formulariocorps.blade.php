<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Corps</title>
</head>
<body>
    <h2>Formulario de Corps</h2>
    <form action="/corps/store" method="POST">
        <label for="denomination">Denominación:</label>
        <input type="text" id="denomination" name="denomination" required>
        <button type="submit">Guardar</button>
    </form>

    <h2>Eliminar Corps</h2>
    <form action="/corps/delete" method="POST">
        <label for="corp_id">ID del Corps:</label>
        <input type="number" id="corp_id" name="corp_id" required>
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
