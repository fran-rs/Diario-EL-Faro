<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>
<body>
    <h1>Contacto</h1>
    <form method="POST" action="">
        <label for="contact-name">Nombre</label>
        <input type="text" id="contact-name" name="name" required />

        <label for="contact-message">Mensaje</label>
        <textarea name="message" id="contact-message" rows="4" required ></textarea>

        <button type="submit">Enviar</button>
    </form>
    <a href="index.php">Volver a Inicio</a>
</body>
</html>
