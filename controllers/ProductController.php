<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Product.php';

class ProductController {
    private \;
    private \;

    public function __construct() {
        \ = new Database();
        \->db = \->getConnection();
        \->product = new Product(\->db);
    }

    public function index() {
        \ = \['search'] ?? '';
        \ = \->product->getAll(\);
        include __DIR__ . '/../views/products/index.php';
    }

    public function create() {
        if (\['REQUEST_METHOD'] == 'POST') {
            \ = trim(\['nama_produk'] ?? '');
            \ = \['harga'] ?? '';
            \ = \['stok'] ?? '';

            if (!empty(\) && is_numeric(\) && \ >= 0 && is_numeric(\) && \ >= 0) {
                if (\->product->create(\, \, \)) {
                    header("Location: index.php?action=index");
                    exit();
                }
            }
            \Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\public\index.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\edit.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\create.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\index.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\controllers\ProductController.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\models\Product.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\config\Database.php'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. = "Validasi gagal! Pastikan nama terisi dan harga/stok berupa angka valid.";
        }
        include __DIR__ . '/../views/products/create.php';
    }

    public function edit() {
        \ = \['id'] ?? null;
        if (!\) {
            header("Location: index.php?action=index");
            exit();
        }

        \ = \->product->getById(\);

        if (\['REQUEST_METHOD'] == 'POST') {
            \ = trim(\['nama_produk'] ?? '');
            \ = \['harga'] ?? '';
            \ = \['stok'] ?? '';

            if (!empty(\) && is_numeric(\) && \ >= 0 && is_numeric(\) && \ >= 0) {
                if (\->product->update(\, \, \, \)) {
                    header("Location: index.php?action=index");
                    exit();
                }
            }
            \Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\public\index.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\edit.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\create.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\index.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\controllers\ProductController.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\models\Product.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\config\Database.php'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. = "Gagal update! Periksa kembali inputan data.";
        }
        include __DIR__ . '/../views/products/edit.php';
    }

    public function delete() {
        \ = \['id'] ?? null;
        if (\) {
            \->product->delete(\);
        }
        header("Location: index.php?action=index");
        exit();
    }
}
?>
