<?php

class AuthController extends Controller {

    public function index() {
        echo "Login Panesya Photo";
    }

    public function login() {
        $auth = $this->service('AuthService');
        echo $auth->login();
    }
}
