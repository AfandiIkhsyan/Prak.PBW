<div class="container_admin_edit">
    <h2 class="admin-edit-heading">Edit Barang</h2>
    <form action="<?= BASEURL; ?>index.php?url=admin/update" method="POST" class="admin-edit-form">
        <input type="hidden" name="id" value="<?= $data['item']['id']; ?>">
        <div class="form-group">
            <label for="nama">Nama Barang:</label>
            <input type="text" name="nama" id="nama" class="form-input" value="<?= $data['item']['nama']; ?>" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" name="stok" id="stok" class="form-input" value="<?= $data['item']['stok']; ?>" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" name="harga" id="harga" class="form-input" value="<?= $data['item']['harga']; ?>" required>
        </div>
        <button type="submit" class="btn-submit">Update</button>
    </form>
</div>
