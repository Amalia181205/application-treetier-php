<?php

require_once __DIR__ . '/../model/Pesanan.php';

class PesananService {

    private $pesanan;

    public function __construct() {
        $this->pesanan = new Pesanan();
    }

    public function getAll() {
        return $this->pesanan->getAll();
    }

    public function tambahPesanan($data) {
        return $this->pesanan->create($data);
    }

    public function ubahStatus($id, $status) {
        return $this->pesanan->updateStatus($id, $status);
    }
}

