<?php
require_once "../app/model/Produk.php";

class ProdukService {

    public function getAll() {
        $produk = new Produk();
        return $produk->all();
    }
}
