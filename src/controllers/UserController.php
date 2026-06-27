<?php

require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index() {
        $users = $this->userModel->getAll();
        require_once 'views/users/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];

            $this->userModel->create($nombre, $email);

            header('Location: index.php?action=index&success=1');
            exit;
        }

        require_once 'views/users/create.php';
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->userModel->delete($id);
        }

        header('Location: index.php?action=index');
        exit;
    }
}
?>