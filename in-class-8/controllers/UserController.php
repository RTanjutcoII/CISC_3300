<?php

namespace controllers;

use models\User;

class UserController {

    public function index() {

        $userModel = new User();

        $users = $userModel->getAllUsers();

        var_dump($users);
    }

}