<?php

class App {
    public function __construct() {
        $url = isset($_GET['url']) ? explode('/', $_GET['url']) : [];

        $controller = $url[0] ?? 'Auth';
        $method     = $url[1] ?? 'index';

        $controllerName = $controller . 'Controller';

        require_once "../app/controllers/$controllerName.php";
        $controllerObj = new $controllerName;

        call_user_func([$controllerObj, $method]);
    }
}
