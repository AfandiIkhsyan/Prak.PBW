<div class="container_admin">
    <h2 class="admin-heading">Halaman Admin</h2>
    <div class="admin-actions">
        <a href="<?= BASEURL; ?>index.php?url=admin/add" class="btn-admin">Tambah Barang</a>
        <a href="<?= BASEURL; ?>index.php?url=login/logout" class="btn-admin btn-logout">Logout</a>
    </div>

    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['items'] as $item): ?>
            <tr>
                <td><?= $item['id']; ?></td>
                <td><?= $item['nama']; ?></td>
                <td><?= $item['stok']; ?></td>
                <td><?= $item['harga']; ?></td>
                <td>
                    <a href="<?= BASEURL; ?>index.php?url=admin/edit/<?= $item['id']; ?>" class="btn-action">Edit</a>
                    <a href="<?= BASEURL; ?>index.php?url=admin/delete/<?= $item['id']; ?>" class="btn-action btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
