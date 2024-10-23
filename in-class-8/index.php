<?php

require_once 'models/User.php';
require_once 'controllers/UserController.php';

$controller = new \controllers\UserController();
$controller->index();