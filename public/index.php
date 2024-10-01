<?php
// public/index.php
require_once '../config/config.php';

// cargar el controlador predeterminado
require_once '../app/controllers/HomeController.php';

$controller = new HomeController();
$controller->index();
?>