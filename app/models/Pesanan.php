<?php

require_once __DIR__ . '/../core/Database.php';

class Pesanan {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    // Ambil semua data pesanan
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM pesanan");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Ambil pesanan berdasarkan ID
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM pesanan WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Tambah pesanan (booking / beli)
    public function create($data) {
        $stmt = $this->db->prepare(
            "INSERT INTO pesanan 
            (nama_pelanggan, produk_id, tanggal, total, status)
            VALUES (?, ?, ?, ?, ?)"
        );

        return $stmt->execute([
            $data['nama_pelanggan'],
            $data['produk_id'],
            $data['tanggal'],
            $data['total'],
            $data['status']
        ]);
    }

    // Update status pesanan
    public function updateStatus($id, $status) {
        $stmt = $this->db->prepare(
            "UPDATE pesanan SET status = ? WHERE id = ?"
        );
        return $stmt->execute([$status, $id]);
    }
}
