// app/models/Task.php

<?php
class Task {
    public $name;
    public $isDev;
    public $age;

    public function __construct($name, $isDev, $age) {
        $this->name = $name;
        $this->isDev = $isDev;
        $this->age = $age;
    }

    public function getDetails() {
        return [
            'name' => $this->name,
            'isDev' => $this->isDev,
            'age' => $this->age,
        ];
    }
}
?>
