<?php
class User {
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT); // Seguridad al almacenar contraseñas
    }

    public function getDetails() {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
?>
