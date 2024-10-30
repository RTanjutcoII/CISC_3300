<?php

namespace homework7number8\controller;

require_once 'model/UserModel.php';
use homework7number8\model\UserModel;

class UserController {

    public function serveHTML() {
        include 'views/webpage.html';
    }

    public function serveJSON() {
        $userModel = new UserModel();
        echo json_encode($userModel->getAllUsers());
    }

}