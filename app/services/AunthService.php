<?php
require_once "../app/model/User.php";

class AuthService {

    public function login() {
        $user = new User();
        return "Login berhasil";
    }
}
