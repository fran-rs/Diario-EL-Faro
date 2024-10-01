// app/controllers/HomeController 
<?php
require_once __DIR__ . '/../models/Task.php';

class HomeController {
    public function index() {
        $task = new Task("Lucy", true, 3);
        $details = $task->getDetails();
        require_once '../app/views/home.php';
    }
}
?>
