<?php

require_once __DIR__ . '/../services/PesananService.php';

class PesananController {

    public function index() {
        $service = new PesananService();
        echo json_encode($service->getAll());
    }

    public function store() {
        $data = json_decode(file_get_contents("php://input"), true);
        $service = new PesananService();
        echo json_encode([
            'success' => $service->create($data)
        ]);
    }
}
