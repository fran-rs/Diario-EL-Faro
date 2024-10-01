<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = new User($name, $email, $password);
            // Aquí puedes guardar el usuario en la base de datos
            header('Location: ' . BASE_URL); // Redirige después de registrar
            exit;
        }
        require_once '../app/views/register.php';
    }

    public function contact() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $message = $_POST['message'];
            // Aquí puedes procesar el mensaje del formulario de contacto
            header('Location: ' . BASE_URL); // Redirige después de enviar
            exit;
        }
        require_once '../app/views/contact.php';
    }
}
?>
