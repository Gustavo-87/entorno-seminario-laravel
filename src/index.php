<?php

require_once 'controllers/UserController.php';

$controller = new UserController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;

    case 'delete':
        $controller->delete();
        break;

    case 'index':
    default:
        $controller->index();
        break;
}