<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Produk - Tugas 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Daftar Produk (Tugas 10)</h2>
    
    <div class="row mb-3">
        <div class="col-md-6">
            <a href="index.php?action=create" class="btn btn-primary">Tambah Produk</a>
        </div>
        <div class="col-md-6">
            <form method="GET" action="index.php" class="d-flex">
                <input type="hidden" name="action" value="index">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari nama produk..." value="<?= htmlspecialchars(\['search'] ?? ''); ?>">
                <button type="submit" class="btn btn-outline-secondary">Cari</button>
            </form>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (\->rowCount() > 0): ?>
                <?php while (\ = \->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?= \['id']; ?></td>
                    <td><?= htmlspecialchars(\['nama_produk']); ?></td>
                    <td>Rp <?= number_format(\['harga'], 0, ',', '.'); ?></td>
                    <td><?= \['stok']; ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?= \['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?action=delete&id=<?= \['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data produk ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
