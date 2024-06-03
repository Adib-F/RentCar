<?php
require_once 'userr.php';

class UserController {
    public function index() {
        $users = [
            new User(1, 'john_doe', 'john@example.com'),
            new User(2, 'jane_smith', 'jane@example.com')
        ];

        include 'user_view.php';
    }
}

$controller = new UserController();
$controller->index();
?>