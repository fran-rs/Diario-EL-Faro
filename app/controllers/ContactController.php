<?php
class ContactController
{
    public function index()
    {
        require_once '../app/views/contact.php';
    }

    public function sendMessage($name, $message)
    {
        // Implementar la lógica para enviar el mensaje
        echo "Mensaje enviado de: $name<br>Contenido: $message";
    }
}
