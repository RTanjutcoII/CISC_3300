<?php

namespace homework7number8\model;

class UserModel {
    public $studentData = [
        'Bobby' => '14',
        'Anna' => '15',
        'Steve' => '17'
    ];

    public function getAllUsers() {
        return $this->studentData;
    }
}