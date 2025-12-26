<?php

class Controller {
    protected function service($service) {
        require_once "../app/service/$service.php";
        return new $service;
    }
}
