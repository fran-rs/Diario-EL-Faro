<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form method="POST" action="">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required />

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required />

        <button type="submit">Registrar</button>
    </form>
    <a href="index.php">Volver a Inicio</a>
</body>
</html>
