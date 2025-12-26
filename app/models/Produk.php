<?php

require_once __DIR__ . '/../core/Database.php';

class ProdukService {

    public function getAll() {
        $db = Database::connect();
        return $db->query("SELECT * FROM produk")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByJenis($jenis) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM produk WHERE jenis=?");
        $stmt->execute([$jenis]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
