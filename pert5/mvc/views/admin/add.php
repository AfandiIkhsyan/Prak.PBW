<div class="container_admin_add">
    <h2 class="admin-add-heading">Tambah Barang</h2>
    <form action="<?= BASEURL; ?>index.php?url=admin/store" method="POST" class="admin-add-form">
        <div class="form-group">
            <label for="nama">Nama Barang:</label>
            <input type="text" name="nama" id="nama" class="form-input" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" name="stok" id="stok" class="form-input" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" name="harga" id="harga" class="form-input" required>
        </div>
        <button type="submit" class="btn-submit">Simpan</button>
    </form>
</div>
