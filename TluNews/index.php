<?php
require './config/config.php';
require './models/User.php';
require './controllers/AdminController.php';
require './controllers/HomeController.php';
require './controllers/NewsController.php';

session_start();
$controller = '';
$action = 'home';

// Lấy controller từ request
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else if (isset($_POST['controller'])) {
    $controller = $_POST['controller'];
}

// Lấy action từ request 
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else if (isset($_POST['action'])) {
    $action = $_POST['action'];
}

// Xử lý routing
if ($controller == '') {
    header('Location: ./views/admin/login.php');
    exit();
}

if ($controller == 'AdminController') {
    $controllerInstance = new AdminController();
    switch ($action) {
        case 'login':
            $controllerInstance->login();
            break;
        case 'manageUsers':
            $controllerInstance->manageUsers();
            break;
        case 'addUser':
            $controllerInstance->addUser();
            break;
        case 'updateUser':
            $controllerInstance->updateUser();
            break;
        case 'deleteUser':
            $controllerInstance->deleteUser();
            break;
        case 'logout':
            session_destroy();
            header('Location: ./views/admin/login.php');
            exit();
        case 'home':
            header('Location: ./views/admin/login.php');
            exit();
        default:
            echo "Trang không tồn tại.";
            exit();
    }
} else if ($controller == 'HomeController') {
    $controllerInstance = new HomeController();
    switch ($action) {
        case 'search':
            if (isset($_GET['category'])) {
                $controllerInstance->handleAjaxSearch();
            }
            break;
        case 'detail':
            $controllerInstance->detail();
            break;
        default:
            header('Location: ./views/home/index.php');
            break;
    }
} else if ($controller == 'NewsController') {
    $controllerOJ = new NewsController();
    if ($action == 'add')
        $controllerOJ->addNews();
    else if ($action == 'edit')
        $controllerOJ->editNews();
    else
        $controllerOJ->deleteNews();
}