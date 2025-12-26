<?php

require_once __DIR__ . '/../service/ProdukService.php';

class ProdukController {

    public function index() {
        $service = new ProdukService();
        echo json_encode($service->getAll());
    }

    public function byJenis($jenis) {
        $service = new ProdukService();
        echo json_encode($service->getByJenis($jenis));
    }
}
