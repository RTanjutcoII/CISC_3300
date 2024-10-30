<?php

require_once 'controller/UserController.php';

use homework7number8\controller\UserController;

$controller = new UserController();

if ($_SERVER['REQUEST_URI'] === '/users' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $controller->serveJSON();
} else {
    $controller->serveHTML();
}