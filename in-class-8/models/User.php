<?php

namespace models;

class User {
    public function getAllUsers() {
        return [
            ['id' => 1, 'name' => 'Bob'],
            ['id' => 2, 'name' => 'Bobby'],
            ['id' => 3, 'name' => 'Bobberson'],
        ];
    }
}