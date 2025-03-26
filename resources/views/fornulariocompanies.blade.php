<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Companies</title>
</head>
<body>
    <h2>Formulario de Companies</h2>
    <form action="/companies/store" method="POST">
        <label for="activity">Actividad Principal:</label>
        <input type="text" id="activity" name="activity" required>
        <button type="submit">Guardar</button>
    </form>

    <h2>Eliminar Companies</h2>
    <form action="/companies/delete" method="POST">
        <label for="company_id">ID de la Compañía:</label>
        <input type="number" id="company_id" name="company_id" required>
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
