<?php
require_once '../config/config.php';

// Cargar el controlador predeterminado
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/UserController.php';

$controller = new HomeController();
$controller->index();

// Si deseas implementar rutas, puedes usar un enfoque simple como este:
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $userController = new UserController();
    if ($action === 'register') {
        $userController->register();
    } elseif ($action === 'contact') {
        $userController->contact();
    }
}
?>
