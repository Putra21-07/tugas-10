<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk - Tugas 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Tambah Produk Baru</h2>
    <?php if(isset(\Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\public\index.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\edit.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\create.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\index.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\controllers\ProductController.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\models\Product.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\config\Database.php'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'.)): ?>
        <div class="alert alert-danger"><?= \Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\public\index.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\edit.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\create.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\views\products\index.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\controllers\ProductController.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\models\Product.php'. Could not find a part of the path 'C:\xampppp\htdocs\tugas 10\config\Database.php'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'.; ?></div>
    <?php endif; ?>
    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga (Rp)</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="index.php?action=index" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
